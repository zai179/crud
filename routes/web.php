<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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

// Dashboard Controller

Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('index', [PostController::class, 'index'])->name('index');
Route::get('addpost', [PostController::class, 'addPost'])->name('addpost');
Route::post('save-post', [PostController::class, 'savePost'])->name('save-post');
Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
