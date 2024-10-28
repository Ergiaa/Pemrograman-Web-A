<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/blog2', [DosenController::class, 'blog']);
