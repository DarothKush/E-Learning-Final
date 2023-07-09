<?php

namespace App\Http\Controllers;
use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Models\cart;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class coursecontroller extends Controller
{
    public function index(){
    //    if(Auth::id())
    //    {
    //     return redirect('redirect');
    //    }

        
        $data = courses::paginate(6);

        return view('frontend.course', compact('data'));
    }
    public function showCourse($course_id)
    {
    $course = courses::find($course_id); 
    
    return view('frontend.coursesingle', ['courses' => $course]);
    }

    public function sidebar(){
        //    if(Auth::id())
        //    {
        //     return redirect('redirect');
        //    }
    
             
            $data = courses::paginate(6);
    
            return view('frontend.coursesidebar', compact('data'));
        }
        public function course_search(Request $request)
        {
            $search_text = $request->search;
            $data = courses::where('course_name', 'LIKE', "%$search_text%")
                            ->paginate(10);
            return view('frontend.coursesidebar', compact('data'));
        }
        public function add_cart(Request $request, $course_id)
        {
            $user = Auth::user();
            Session::put('user_id', $user->user_id);
            $course = courses::find($course_id);
            $cart = new cart;
            $cart->  course_id = $course->course_id;
            $cart->  user_id = $user->registerUser_id;
            $cart -> course_name = $course->course_name; 
            $cart -> course_description = $course->course_description; 
            $cart -> price = $course->price;
            $cart -> save();
            return redirect()->back();


        }
    public function purchase($course_id)
    {
    $course = courses::find($course_id); 
    
    return view('frontend.purchase_course', ['courses' => $course]);
    }  
    
    public function cart()
{
    $cart = cart::all();
    $subtotal = 0;
    foreach ($cart as $item) {
        $subtotal += $item->price;
    }
    $total = $subtotal;

    return view('frontend.cart', compact('cart','total','subtotal'));
}
        // public function store(Request $request){
    // $request->validate([
    //     'course_name' => 'required',
    //     'course_description' => 'required',
    //     'status' => 'required',
    //     'subject' => 'required',
    //     'teacher_name' => 'required',
    //     'price' => 'required',
    //     'amount' => 'required',
    // ]);
    
}

