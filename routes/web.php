<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternController;
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

Route::get('/intern','App\Http\Controllers\InternController@displayform');
Route::post('/add_data','App\Http\Controllers\InternController@save'); 


Route::get('/', function () {
    return view('welcome');
});
