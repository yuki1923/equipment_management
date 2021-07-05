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
use App\Http\Controllers\EquipmentController;

// ログイン前のトップページ
Route::get('/', 'TopPageController@show')->name('top');


Auth::routes();
Route::get('logout', 'LoginController@getLogout')->name('logout');
Route::get('mypage', 'MypageController@index')->name('mypage');
Route::post('mypage/{id}', 'MypageController@destroy')->name('mypage.withdraw');

Route::group(['prefix' => 'equipment'], function () {
    Route::get('index', 'EquipmentController@index')->name('equipment.index');
    Route::get('create', 'EquipmentController@create')->name('equipment.create');
    Route::post('store', 'EquipmentController@store')->name('equipment.store');
    Route::get('edit/{id}', 'EquipmentController@edit')->name('equipment.edit');
    Route::post('update/{id}', 'EquipmentController@update')->name('equipment.update');
    Route::post('destroy/{id}', 'EquipmentController@destroy')->name('equipment.destroy');
    Route::get('search', 'EquipmentController@search')->name('equipment.search');
});
