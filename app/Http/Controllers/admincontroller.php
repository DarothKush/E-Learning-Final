<?php

namespace App\Http\Controllers;

use App\Models\myedu;
use App\Models\User;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class admincontroller extends Controller
{
    public function dashboard(){
        return view('layout.dashboard');
    }
    public function member(){
        return view('layout.member');
    }
    public function profile(){
        return view('layout.profile');
    }
    //course
    public function courseadd(){
        return view('layout.courses.courseadd');
    }
    public function courseview(){
        return view('layout.courses.courseview');
    }
    public function courseedit(){
        return view('layout.courses.courseedit');
    }
    //store
    public function storeadd(){
        return view('layout.store.storeadd');
    }
    public function storeview(){
        return view('layout.store.storeview');
    }
    //user
    public function user(){
        return view('layout.user');
    }

    public function profileView(){
        $profileView = User::all();
        return view('layout.profile', compact('profileView'));
    }

}
