<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courses;
use App\Models\User;
use App\Models\order;
use App\Models\orderitem;
use App\Models\Cart;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'No match'], 401);
        }
        $user = Auth::user();
        $accessToken = $user->createToken('API Token');
        $token = $accessToken->plainTextToken;
        return response()->json([['message'=> 'You are logged in!'], ['access_token' => $token]], 200);
    }


    public function process_signup(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);
        // try{
            $user = User::create([
                'registerUser_firstname' => trim($request->input('firstname')),
                'registerUser_lastname' => trim($request->input('lastname')),
                'email' => strtolower($request->input('email')),

                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);
            session()->flash('message', 'Your account is created');
            return response()->json([
                'message'=>'Registration Success',
                'user'=>$user,
                'token'=>$user->createToken('API Token of '.$user->registerUser_firstname)->plainTextToken
                ]);
        // } catch (\Illuminate\Database\QueryException $e) {
            // report($e);
            session()->flash('message', 'Your registration is getting problem');
            return response()->json(['message'=>"Fail to register"]);
        // }               
    }
    public function test()
    {
        $user = Auth::user();
        return response()->json($user->registerUser_id);
    }
    public function search(Request $request){
        $data = courses::where('course_name', 'like', '%'.$request->input('query').'%')
                        ->get();
        return response()->json($data);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'status' => 'required',
            'subject' => 'required',
            'teacher_name' => 'required',
            'price' => 'required',
            'course_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        
    
            $imagename = $request->file('course_img')->getClientOriginalName();
        $request->file('course_img')->move(public_path('assets/images'), $imagename);
        
        // inserting data
        $query = DB::table('course')->insert([
        
            'course_name' => $request->input('course_name'),
            'course_description' => $request->input('course_description'),
            'course_img' => $imagename,
            'price' => $request->input('price'),
            'subject' => $request->input('subject'),
            'status' => $request->input('status'),
            'teacher_name' => $request->input('teacher_name'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if ($query) {
            return response()->json( ['message'=>'Data have been successfully inserted.', $query ]);
        } else {
            return response()->json( ['message'=>'Failed to insert data!']);
        }
    }   

    public function add_cart(Request $request, $course_id)
    {
        $user = Auth::user();
        
        $course = courses::find($course_id);
        $cart = new cart;
        $cart->  course_id = $course->course_id;
        $cart->  user_id = $user->registerUser_id;
        $cart -> course_name = $course->course_name; 
        $cart -> course_description = $course->course_description; 
        $cart -> price = $course->price;
        $cart -> save();
        return response()->json($cart);
    }
    public function showAllCourse(){
    
        $data = courses::all();

        return response()->json($data);
    }

    public function cart()
{
    $cart = cart::all();
    $subtotal = 0;
    foreach ($cart as $item) {
        $subtotal += $item->price;
    }
    $total = $subtotal;

    return response()->json($cart);
}

    
}
