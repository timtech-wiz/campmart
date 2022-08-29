<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/admin', function () {
    return view('backend.admin.index');
});
Route::get('/category', function () {
    return view('backend.category.create');
});

Route::get('/home', [HomeController::class, 'index']);
//Route::post('/register', "RegisteredUserController@store")->name("register");
  
