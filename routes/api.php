<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//---#Login-Signup-logout
//http://127.0.0.1:8888/api/postlogin
Route::post('/login', [ApiController::class,'process_login'])->name('postlogin');
//http://127.0.0.1:8888/api/register
Route::post('/register', [ApiController::class,'process_signup'])->name('postsignup');

//---#End Login-Signup-logout

//http://127.0.0.1:8888/api/search
Route::get("/search",[ApiController::class,'search']);

Route::group(["middleware" => ["auth:sanctum"]], function(){
    //http://127.0.0.1:8888/api/logout
    Route::post('/logout', [ApiController::class,'logout'])->name('logout');
    //http://127.0.0.1:8888/api/test
    Route::get('/test', [ApiController::class,'test']);

    //#course-relate
        //http://127.0.0.1:8888/api/myclass
        Route::get("/myclass",[ApiController::class,'showMyClass']);
        //http://127.0.0.1:8888/api/addCourse
        // Route::post("/addCourse",[ApiController::class,'addCourse']);
        
        
    
    //#end-course
    //#Cart
    //http://127.0.0.1:8888/api/add_cart/2
        Route::post('/add_cart/{course_id}',[ApiController::class,'add_cart']);
        
        
    //#End-Cart
});
//http://127.0.0.1:8888/api/showAllCourse
Route::get("/showAllCourse",[ApiController::class,'showAllCourse']);
//http://127.0.0.1:8888/api/insert
Route::post("/insert",[ApiController::class,'insert']);

//http://127.0.0.1:8888/api/cartItem
        Route::get("/showCartItem",[ApiController::class,'cart']);