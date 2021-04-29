<?php
use Illuminate\Support\Facades\Route;
/*
Simple Route for calling a function
Route::get('/home',function(){
echo("Welcome To The Future");
});*/
/*
Route for calling a view directly
Route::view('/home','homepage');
*/
/*
Route for calling a controller
use App\Http\Controllers\AdminController;
Route::get('/home/{}',[AdminController::class,'index']);
*/
/*
Route for calling a resource Controller
use App\Http\Controllers\AdminController;
Route::resource('/home',AdminController::class);
*/

/*
Passing optional data to a controller from a Route. In this case in the function of index in controller we assume its value like $name==""
use App\Http\Controllers\UserController;
Route::get('/home/{name?}',[UserController::class,'index']);

*/

/*
Passing compusary data to controller from a Route
App\Http\Controllers\UserController;
Route::get('/home/{name}',[UserController::class,'index']);
*/

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller_1;
use App\Http\Controllers\Controller_2;
use App\Http\Controllers\Controller_3;
use App\Http\Controllers\Controller_4;
use App\Http\Controllers\Controller_5;
use App\Http\Controllers\Controller_6;
use App\Http\Controllers\Controller_7;
use App\Http\Controllers\Controller_8;
use App\Http\Controllers\Controller_9;
use App\Http\Controllers\Controller_10;
use App\Http\Controllers\Controller_11;
use App\Http\Controllers\Controller_12;
use App\Http\Controllers\Controller_13;
use App\Http\Controllers\Controller_14;
use App\Http\Controllers\Controller_15;
use App\Http\Controllers\Controller_16;
use App\Http\Controllers\Controller_17;
use App\Http\Controllers\Controller_18;
use App\Http\Controllers\Controller_19;
use App\Http\Controllers\Controller_20;
use App\Http\Controllers\Controller_21;
use App\Http\Controllers\Controller_22;
use App\Http\Controllers\Controller_23;
use App\Http\Controllers\Controller_24;
use App\Http\Controllers\Controller_25;
use App\Http\Controllers\Controller_26;
use App\Http\Controllers\Controller_27;


Route::get('/', [AdminController::class, 'index']);

Route::get('/controller1',[Controller_1::class,'index'])->name('controller1');
Route::get('/controller2',[Controller_2::class,'index'])->name('controller2');
Route::get('/controller3',[Controller_3::class,'index'])->name('controller3');
Route::get('/controller4',[Controller_4::class,'index'])->name('controller4');
Route::get('/controller5',[Controller_5::class,'index'])->name('controller5');
Route::get('/controller6',[Controller_6::class,'index'])->name('controller6');
Route::get('/controller7',[Controller_7::class,'index'])->name('controller7');
Route::resource('/controller8',Controller_8::class);
Route::resource('/controller9',Controller_9::class);
Route::resource('/controller10',Controller_10::class);
Route::resource('/controller11',Controller_11::class);
Route::resource('/controller12',Controller_12::class);
Route::resource('/controller13',Controller_13::class);
Route::resource('/controller14',Controller_14::class);
Route::resource('/controller15',Controller_15::class);
Route::resource('/controller16',Controller_16::class);
Route::resource('/controller17',Controller_17::class);
Route::resource('/controller18',Controller_18::class);
Route::get('/controller19',[Controller_19::class,'index'])->name('controller19');
Route::group(['middleware'=>['mypages']],function(){
Route::get('/controller20',[Controller_20::class,'index'])->name('controller20');	
//// Other routes can be defined here...
});
Route::middleware('myroute')->get('/controller21',[Controller_21::class,'index'])->name('controller21');
Route::get('/controller22',[Controller_22::class,'index'])->name('controller22');

Route::resource('/controller23',Controller_23::class);
Route::resource('/controller24',Controller_24::class);
Route::resource('/controller25',Controller_25::class);
Route::resource('/controller26',Controller_26::class);
Route::resource('/controller27',Controller_27::class);
