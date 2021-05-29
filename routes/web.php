<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;

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
Route::get('/anggota',[datacontroller::class,'index']);
Route::get('/anggota/cari',[datacontroller::class,'cari']);
Route::get('/anggota/lain',[datacontroller::class,'join']);
Route::get('/anggota/lainnya',[datacontroller::class,'injoin']);