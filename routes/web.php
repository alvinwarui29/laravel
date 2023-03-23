<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\controllers\userList;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::post('/',[users::class,'getData']);
// Route::view('login','user');
// Route::view('login','login');
// Route::view('profile','profile');
// Route::post('user',[userAuth::class,'login']);

// Route::get('/logout',function(){
//     if(session()->has('username')){
//         session()->pull('username');
//         return redirect('login');
//     }
// });
// Route::view('add','add');
// Route::post('user',[addMember::class,'add']);

Route::get('user',[userList::class,'list']);


















// Route::get('/',function(){
//     return view('user');
// });
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::view('user','user');
// Route::view('contact','contact');
// Route::view('user','user');
// Route:: get("user",[Users::class,'index']);
// Route::get('user',[userController::class,'load']);