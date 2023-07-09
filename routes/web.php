<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\coursecontroller;
use App\Http\Controllers\Auth\LoginController;
use App\http\Controllers\teachercontroller;
use App\Http\Controllers\checkoutcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function(){
    return view('master.master');
});

//signup page
Route::get('/signup', function(){
    return view('frontend.signup');
});

//homepage
Route::get('/homepage', function(){
    return view('frontend.homepage');
})->name('homepage');

//about us page
Route::get('/aboutus',function(){
    return view('frontend.aboutus');
});

//course page
Route::get('/course',function(){
    return view('frontend.course');
});

//single course page
Route::get('/coursesingle',function(){
    return view('frontend.coursesingle');
});

//dashboard
Route::get('/dashboard',function(){
    return view('frontend.dashboard');
});

//teacher dashboard
Route::get('/teacherdashboard',function(){
    return view('frontend.teacherdashboard');
});

//teacher register
Route::get('/teacherregister',function(){
    return view('frontend.teacherregister');
});

//all teacher page
Route::get("/allteacher",function(){
    return view('frontend.allteacher');
});

//cart
Route::get('/cart',function(){
    return view('frontend.cart');
})->name('cart');;

//checkout
Route::get('/checkout',function(){
    return view('frontend.checkout');
})->name('checkout');;

//contact page
Route::get('/contact',function(){
    return view('frontend.contact');
});

//event page
Route::get('/event',function(){
    return view('frontend.event');
});
Route::get('/purchase',function(){
    return view('frontend.purchase_course');
})->name('purchase');
Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/coursesingle/{course_id}',[coursecontroller::class,'showCourse'])->name('coursesingle/{course_id}.showcourse');

Route::get('/login', [loginController::class, 'show_login'])->name('login');

Route::post('/login', [loginController::class,'process_login'])->name('postlogin');
Route::post('/register', [loginController::class,'process_signup'])->name('postsignup');
Route::get('/logout', [loginController::class,'logout'])->name('logout');

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/coursesidebar', function () {
    return view('frontend.coursesidebar');
});

Route::get('/coursesidebar', [CourseController::class, 'sidebar'])->name('coursesidebar.index');

Route::get('/course_search',[CourseController::class,'course_search']);

Route::get('/teacher', function () {
    return view('master.tmaster');
});
Route::get('/t-myclass', function(){
    return view('teacher.myclass');
});
Route::get('/profile', function(){
    return view('teacher.profile');
});
Route::get('/createcourse', function(){
    return view('teacher.createcourse');
});
Route::post('add', [MainController::class, 'add']) ->name('add.video');

Route::post('/add_cart/{course_id}',[CourseController::class,'add_cart']);
Route::get('/purchase/{course_id}',[Coursecontroller::class,'purchase'])->name('purchase/{course_id}.purchase');
Route::get('/cart',[CourseController::class,'cart'])->name('cart');

Route::get('/private_policy', function(){
    return view('frontend.private_policy');
});

Route::get('/mycourse', function(){
    return view('frontend.mycourse');
});

Route::post('/coursecreate',[teachercontroller::class,'insert'])->name('coursecreate.insert');
//index
Route::get('/t-myclass',[teachercontroller::class,'index'])->name('t-myclass.index');
//edit
// Route::get('/admin/courseedit/edit/{course_id}', [teachercontroller::class,'edit']);
Route::get('/courseedit/{course_id}', [teachercontroller::class, 'edit'])->name('courseedit.edit');

Route::post('/course/{course_id}', [teachercontroller::class, 'update'])->name('courseupdate.update');
//delete
Route::get('/{course_id}/delete', [teachercontroller::class, 'delete'])->name('coursedelete.delete');
Route::get('/checkout', [checkoutController::class, 'index'])->name('checkout.index');
Route::post('/placeorder', [checkoutController::class, 'placeOrder'])->name('placeorder.placeOrder');

Route::group(["middleware" => ["auth"]], function(){
    Route::post('/add_cart/{course_id}',[CourseController::class,'add_cart']);
    Route::get('/checkout', [checkoutController::class, 'index'])->name('checkout.index');
Route::post('/placeorder', [checkoutController::class, 'placeOrder'])->name('placeorder.placeOrder');

});
