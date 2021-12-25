<?php

use App\Http\Controllers\OtherController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about',[OtherController::class,'About'])->middleware(['auth'])->name('about');
Route::get('/info',[OtherController::class,'Info'])->middleware(['auth'])->name('info');
Route::get('/products',[OtherController::class,'Products'])->middleware(['auth'])->name('products');
Route::get('/category',[OtherController::class,'Category'])->middleware(['auth'])->name('category');
Route::get('/test',[OtherController::class,'Test'])->middleware(['auth'])->name('test');


require __DIR__.'/auth.php';
