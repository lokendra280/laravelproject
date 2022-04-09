<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forentend\Homecontroller;
use App\Http\Controllers\forentend\Aboutcontroller;
use App\Http\Controllers\forentend\Blogcontroller;
use App\Http\Controllers\forentend\contactcontroller;
use App\Http\Controllers\forentend\Admincontroller;
use App\Http\Controllers\forentend\messagecontroller;
use App\Http\Controllers\forentend\logincontroller;
use App\Http\Controllers\forentend\registercontroller;
use App\Http\Controllers\forentend\Forgotpassword;
use App\Http\Controllers\forentend\adminpagecontroller;
use App\Http\Controllers\forentend\warehousecontroller;
use App\Http\Controllers\forentend\bookshipcontroler;
use App\Http\Controllers\forentend\sendercontroller;
use App\Http\Controllers\forentend\recevercontroller;
use App\Models\receiver;

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
Route::get('/',[Homecontroller::class,'index']);
Route::get('/about',[Aboutcontroller::class,'index']);
Route::get('/contact',[contactcontroller::class,'index']);
Route::post('/contacts',[contactcontroller::class,'store']);
Route::post('/register',[contactcontroller::class,'store']);
Route::post('/contact',[contactcontroller::class,'view']);
Route::get('/customer-view',[contactcontroller::class,'view'])->middleware('isLoggedIn');;;
Route::get('message/delete/{id}',[contactcontroller::class,'delete'])->name('message.delete');
Route::get('/login',[logincontroller::class,'login'])->middleware('AllreadyLoggedIn');;

// logi code

Route::post('/logins',[logincontroller::class,'loginsubmit']);
Route::get('/dashboard',[logincontroller::class,'dashboard'])->middleware('isLoggedIn');;
Route::get('/logout',[logincontroller::class,'logout']);
// register 
Route::get('/form',[registercontroller::class,'formsubmit'])->middleware('AllreadyLoggedIn');;
Route::post('/registration',[registercontroller::class,'createsubmit']); 
 

//  admin login
Route::get('/admin',[Admincontroller::class,'admin'])->middleware('AllreadyLoggedIn');
Route::post('/admins',[Admincontroller::class,'adminslogin']);
Route::get('/adminpage',[adminpagecontroller::class,'adminpage'])->middleware('isLoggedIn');;
Route::get('/logoutadmin',[Admincontroller::class,'logoutpage']);
// forgot password
Route::post('/forgot',[Forgotpassword::class,'forgot']); 
Route::get('/forgotpassword',[Forgotpassword::class,'password']);
// warehouse
Route::get('/warehouse',[warehousecontroller::class,'warehouse']);

// bookshiping
Route::get('/shiping',[bookshipcontroler::class,'bookship']);
// registration detail
Route::get('/registrationdetail',[registercontroller::class,'registrationdetail']); 
Route::get('/registration',[registercontroller::class,'viewregdetail'])->middleware('isLoggedIn');;;

//senderinfo
Route::post('/senderinfo',[sendercontroller::class,'sender']);
Route::get('/shiping',[sendercontroller::class,'senderfetch']);
//receiver info
Route::get('/receiverinfo',[recevercontroller::class,'receiver']);
Route::post('/receiver',[recevercontroller::class,'sender']);

//data slects in admin pannel
Route::get('/shiping',[sendercontroller::class,'senders']);
Route::get('/shiping',[sendercontroller::class,'receiver']);
//data selects in admin pannel receiver
// Route::get('/receiverdetail',[recevercontroller::class,'receiverdata']);
