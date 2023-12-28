<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/age_not_allowed', function(){
    return '<h1>Age not Allowed!</h1>';
})->name('age_not_allowed');

Route::get('/page', function(Request $request){
    return '<h1>You age is: ' . $request->input('age');
})->middleware('Check_age');
