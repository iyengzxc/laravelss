<?php

use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class, 'index'])->name('home');
Route::post('/save-products',[ProductController::class, 'save_products'])->name('saveProducts');
Route::get('/delete-products/{id}', [ProductController::class, 'delete_products'])->name('removeProducts');
Route::get('/update-products/{id}', [ProductController::class, 'update_products'])->name('updateProducts');
Route::post('/save-updated-products', [ProductController::class, 'save_updated_products'])->name('saveUpdatedProducts');
