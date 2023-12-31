<?php

use App\Http\Controllers\CategorisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu', function () {
    return view('tranhChu');
});
Route::resource('posts', PostController::class);
// Route::resource('create', PostController::class);
Route::resource('products',ProductController::class);
Route::resource('categoris',CategorisController::class);
