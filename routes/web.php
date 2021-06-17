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

use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TopPageController;
use App\Http\Controllers\EquipmentRegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'TopPageController@show')->name('top');
Route::get('home/equipment_registration', 'EquipmentRegistrationController@show')->name('equipment_registration');
Route::post('home/equipment_registration', 'EquipmentRegistrationController@create')->name('equipment_create');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', function () {
//     return view('auth.register');
// });
