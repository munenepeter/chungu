<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Shop\Collections;

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
Route::get('/login', function () {
    return view('welcome');
});
Route::get('/collections', Collections::class);


Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});


