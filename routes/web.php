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
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// ログイン前のトップページ
Route::get('/', 'TopPageController@show')->name('top');


Auth::routes();
Route::get('index', 'HomeController@index')->name('index');
Route::get('logout', 'LoginController@getLogout')->name('logout');
// Route::get('/register', function () {
//     return view('auth.register');
// });

// Route::get('logout', 'LoginController@logout')->('logout');



Route::group(['prefix' => 'equipment'], function () {

    // Route::get('index', 'HomeController@index')->name('equipment.index');
    Route::get('create', 'EquipmentController@create')->name('equipment.create');
    Route::post('store', 'EquipmentController@store')->name('equipment.store');
    Route::get('edit/{id}', 'EquipmentController@edit')->name('equipment.edit');
    Route::post('update/{id}', 'EquipmentController@update')->name('equipment.update');
    Route::post('destroy/{id}', 'EquipmentController@destroy')->name('equipment.destroy');
});
