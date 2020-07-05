<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function (Request $request) {
    if (session()->has('locale')) {
        App::setlocale(session()->get('locale'));
    }
    return view('welcome');
})->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/language/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return back();
})->name('language');

Route::middleware(['auth'])->group(function () {
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/users/{id}', 'UserController@show')->name('users.show');
});
