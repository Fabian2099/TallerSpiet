<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;

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
Route::get('/', function () {
    return view('Template.Template');
});
Route::get('/user',[App\Http\Controllers\user::class,'index'])->name('user.index');
Route::get('/user',[App\Http\Controllers\user::class,'create'])->name('user.create');
//Route::get('/user',[App\Http\Controllers\user::class,'delete'])->name('user.delete');
//Route::get('/user',[App\Http\Controllers\user::class,'edit'])->name('user.edit');
//Route::get('/user',[App\Http\Controllers\user::class,'show'])->name('user.show');

//Route::get('/user',[App\Http\Controllers\user::class,'index'])->name('user.');
//Route::get('/user',[App\Http\Controllers\user::class,'index'])->name('user.');
//Route::get('/user',[App\Http\Controllers\user::class,'index'])->name('user.');
//Route::get('/user',[App\Http\Controllers\user::class,'index'])->name('user.');
//Route::get('/user',[App\Http\Controllers\user::class,'index'])->name('user.');


//Route::resource('user', user::class);
