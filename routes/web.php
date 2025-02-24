<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::view('/', 'home')->name('home');
// Route::get('/', function(){
//     return "Hello World";
// })->name('home');
Route::view('services', 'services')->name('services');
Route::view('about', 'about')->name('about');
// Route::view('contact', 'contact')->name('contact');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact_submit');
