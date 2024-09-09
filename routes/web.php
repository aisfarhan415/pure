<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::resource('posts', PostController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('admin');
Route::get('/admin-login', function () {
    return view('admin-login');
});
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('admin');
// Route::get('/login', function () {
//     return "Not Login Yet";
// });

