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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function(){
    $flowers=DB::table('flowers')->get();
    return $flowers;
});
*/
/*
Route::get('/', function(){
    $flowers=DB::table('flowers')->where('nume','lalele')->first();
    return ($flowers->nume);
});
*/
/*
Route::get('/', function(){
    $flowers=DB::table('flowers')->where('nume', 'lalele')->first();
    dd($flowers);
});
*/
Route::get('/', function(){
    $flowers=DB::select('select * from flowers');
    return $flowers;
});
