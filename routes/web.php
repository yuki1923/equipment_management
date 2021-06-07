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

use App\Http\Controllers\TopPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('equipment.top');
// });

Route::get('/', 'TopPageController@show');
Route::get('/signup', 'SignUpController@show');
Route::get('/login', 'LoginController@show');
