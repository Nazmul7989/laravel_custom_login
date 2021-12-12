<?php

use App\Http\Controllers\AdminLoginContrller;
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
    return view('welcome');
})->middleware('adminLogin');

Route::get('/loginPage',[AdminLoginContrller::class,'loginPage']);
Route::post('/adminLoginCheck',[AdminLoginContrller::class,'adminLoginCheck']);
Route::get('/adminLogout',[AdminLoginContrller::class,'adminLogout']);
