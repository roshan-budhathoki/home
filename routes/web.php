<?php

use App\Http\Controllers\login;
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
});

Route::get('/login', function(){
    return "I am login";
});

Route::get('/controllerLogin/{id?}', [login::class, 'showValue'])->middleware('token');

Route::get('/namedRoute', [login::class, 'opposite']);

Route::get('/named', function (){
    return "I am named route";
})->name('namedRoute');

