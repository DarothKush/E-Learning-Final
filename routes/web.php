<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MyeduController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\registerUserController;

use Illuminate\Support\Facades\Route;

//profile
Route::get('/admin/profile',[admincontroller::class,'profileView']);

Route::get('/admin', function()
{
    return view('login');
});
Route::get('/admin/member', [admincontroller::class, 'member'])->name('member');
Route::get('/admin/courseadd', [admincontroller::class, 'courseadd'])->name('courseadd');
Route::get('/admin/courseadd', [admincontroller::class, 'courseadd'])->name('courseadd');
Route::get('/admin/courseview', [admincontroller::class, 'courseview'])->name('courseview');
Route::get('/admin/courseedit', [admincontroller::class, 'courseedit'])->name('courseedit');
Route::get('/admin/storeadd', [admincontroller::class, 'storeadd'])->name('storeadd');
Route::get('/admin/storeview', [admincontroller::class, 'storeview'])->name('storeview');

Route::get('/admin/coursedetail', [MyeduController::class, 'index4'])->name('coursedetail');

//course
//insert
Route::post('/courseinsert',[MyeduController::class,'insert'])->name('myedu.insert');
//index
Route::get('/admin/courseview',[MyeduController::class,'index']);
//edit
// Route::get('/admin/courseeditr/edit/{course_id}', [MyeduController::class,'edit']);
Route::get('/courseedit/{course_id}', [MyeduController::class, 'edit'])->name('courseedit.edit');
//update
Route::post('/admin/course/{course_id}', [MyeduController::class, 'update'])->name('courseupdate.update');
//delete
Route::get('/coursedelete/{course_id}', [MyeduController::class, 'delete'])->name('coursedelete.delete');


//store
//insert
Route::post('/storeinsert',[StoreController::class,'insert'])->name('storemodel.insert');
//storeview
Route::get('/admin/storeview',[StoreController::class,'index2']);
//store edit
Route::get('/storeedit/{store_id}', [StoreController::class, 'edit'])->name('storeedit.edit');
//store update
Route::post('/admin/store/{store_id}', [StoreController::class, 'update'])->name('storeupdate.update');
//store delete
Route::get('/storedelete/{store_id}', [StoreController::class, 'delete'])->name('storedelete.delete');

//register user
Route::get('/admin/user',[registerUserController::class,'userView']);
//edit
Route::get('/useredit/{registerUser_id}', [registerUserController::class, 'edit'])->name('useredit.edit');
//update
Route::post('/admin/user/{registerUser_id}', [registerUserController::class, 'update'])->name('userupdate.update');
//delete
Route::get('/userdelete/{registerUser_id}', [registerUserController::class, 'delete'])->name('userdelete.delete');

//admin login
Route::get('/admin', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

