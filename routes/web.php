<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UserController;

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

Route::get('/', [pagesController::class, 'masterdb']);

// Admin
Route::get('/lapor', [AdminController::class, 'index']);
Route::get('/laporunit', [AdminController::class, 'unit']);
Route::get('/laporunit/tambah', [AdminController::class, 'tambahunit']);
Route::post('/laporunit/tambah/simpan', [AdminController::class, 'unittambah']);
Route::get('/laporunit/edit/{id}', [AdminController::class, 'unitedit']);
Route::put('/laporunit/update/{id}', [AdminController::class, 'simpanunit']);
Route::delete('/laporunit/delete/{id}', [AdminController::class, 'deleteunit']);
Route::get('/user', [AdminController::class, 'user']);
Route::get('/user/tambah', [AdminController::class, 'tambahuser']);



// User
Route::get('/tambah', [UserController::class, 'index']);
Route::get('/tambah/create', [UserController::class, 'create']);
Route::post('/tambah/create/simpan', [UserController::class, 'store']);
Route::get('/tambah/edit/{id}', [UserController::class, 'show']);
Route::put('/tambah/edit/save/{id}', [UserController::class, 'update']);
Route::delete('/tambah/delete/{id}', [UserController::class, 'destroy']);
Route::get('/profuser', [UserController::class, 'profile']);






Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Auth::routes();