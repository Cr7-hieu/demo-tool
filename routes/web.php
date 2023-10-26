<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanLyController;
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

Route::get('/home',[QuanLyController::class,'home']);
Route::get('/post/index',[QuanLyController::class,'index'])->name('post_index');
Route::get('/post/them',[QuanLyController::class,'them'])->name('post_them');
Route::post('/post/them',[QuanLyController::class,'update'])->name('post_update');
Route::get('/categories/category',[QuanLyController::class,'category'])->name('categories_category');
Route::get('/categories/them',[QuanLyController::class,'them'])->name('categories_them');
Route::get('/categories/them',[QuanLyController::class,'save'])->name('categories_save');