<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\SuppliesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PetsController::class, 'index']);
Route::get('checkout', function () {
    return view('pages.checkout');
});
Route::get('admin/pets', [AdminController::class, 'pets']);
Route::get('admin/supplies', [AdminController::class, 'supplies']);
Route::post('admin/showDialog/{data}', [AdminController::class, 'showDialog']);
Route::get('admin/supplies/{data}', [AdminController::class, 'show2']);
Route::post('admin/update/{data}', [AdminController::class, 'update']);
Route::get('admin/delete/{id}', [AdminController::class, 'destroy']);
Route::get('admin/delete2/{id}', [AdminController::class, 'destroy2']);
Route::resource('admin', AdminController::class);

// Route::get('supplies/supplies', [SuppliesController::class, 'index']);
// Route::post('admin/showDialog2/{data}', [SuppliesController::class, 'showDialog']);
// Route::post('admin/update2/{data}', [SuppliesController::class, 'update']);
// Route::get('admin/delete2/{id}', [SuppliesController::class, 'destroy']);
// Route::resource('supplies', SuppliesController::class);
Route::resource('pets', PetsController::class);
Route::resource('supplies', SuppliesController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');