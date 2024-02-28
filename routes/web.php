<?php

use App\Http\Controllers\ProfileController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

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

Route::get('/compte', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/compte',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/',[\App\Http\Controllers\ItemController::class,'index'])->name('item.index');
Route::get('/AddItem',[\App\Http\Controllers\ItemController::class,'create'])->name('item.create');


Route::resource('item',\App\Http\Controllers\ItemController::class)->except('index');
Route::resource('order', \App\Http\Controllers\OrderController::class);



