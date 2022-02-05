<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home',function(){
    return redirect('/');
});

Route::get('/', function(){
    if(Auth::check()){
         $user_role=Auth::user()->role->name;
      
        if($user_role=="administrator"){
            return view('admin.index');
        } else if($user_role=="user"){
            return view('user.index');
        }

        }else{
            return view("auth.login");
        }

});



Route::group(['middleware'=>"web"],function () {
    Route::resource('/user', 'userController');
    Route::resource('/foodsAndDrinks', 'foodController');
    Route::resource('/backUpController', 'backUpController');
});