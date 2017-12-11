<?php

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
    return view('index.index');
});


Route::get('phpinfo',function(){
    phpinfo();
});

Route::group(['middleware'=>['web'],'prefix'=>'home'],function (){
    Route::get('register',function (){
       return view('index.register');
    });

    Route::post('register','HomeAuth@register');
    Route::get('logout','HomeAuth@logout');
    Route::get('login',function (){
        return view('index.login');
    });
    Route::post('login','HomeAuth@login');

});
