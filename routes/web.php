<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('layouts/app');
// });

Route::get('/', function () {
    return view('website/main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Website Route
Route::get('/web-home', [App\Http\Controllers\WebsiteController::class, 'main'])->name('web-home');
Route::get('/contact', [App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');
Route::get('/aboutus', [App\Http\Controllers\WebsiteController::class, 'aboutus'])->name('aboutus');
Route::get('/product', [App\Http\Controllers\WebsiteController::class, 'product'])->name('product');


