<?php

use App\Models\Showrooms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomsController;
use App\Http\Controllers\UsersController;

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
Route::get('/home', function() {
    return view('HomeAfterLogin');
});

Route::get('/addCar', function() {
    return view('AddCar');
});

Route::get('/itemDetail', function() {
    return view('ItemDetail');
});

Route::get('/editItem', function() {
    return view('EditItem');
});

Route::get('/profile', function() {
    return view('Profile');
});

Route::get('/login', function() {
    return view('Login');
});

Route::get('/myItem', function() {
    return view('MyItem');
});

Route::resource('/register', UsersController::class);