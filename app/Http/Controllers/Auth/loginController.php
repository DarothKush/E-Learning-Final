<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    public function show_login()
    {
        return view('frontend.login');
    }

    // process login
    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        

        $registerusers = User::where('email',$request->email)->first();

        if (!auth()->attempt($request->only(['email', 'password']), $request->remember)) {  // user and password match

            return back()->with("failed", "Invalid Details");  // Redirect to homepage

        }
        
        Session::put('registerUser_id', $registerusers->registerUser_id);
        return redirect('/homepage')->with('success', 'You have been logged in.');
    }

    // process signup
    public function process_signup(Request $request)
    {
        $request->validate([
            'registerUser_firstname' => 'required',
            'registerUser_lastname' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

          try {
            User::create([
                'registerUser_firstname' => trim($request->input('registerUser_firstname')),
                'registerUser_lastname' => trim($request->input('registerUser_lastname')),
                'email' => strtolower($request->input('email')),
                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);

           session()->flash('message', 'Your account is created');
             return response()->json('success');
          } catch (\Illuminate\Database\QueryException $e) {
              session()->flash('message', 'Your registration is encountering a problem');
                return response()->json('fail');
          }

        
    }

    // process logout
    public function logout()
    {
        Auth::logout();

        // Redirect the user to a specific page after logout
        return redirect('/homepage')->with('success', 'You have been logged out.');
    }
}
