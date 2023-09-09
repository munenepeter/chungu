<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Form;

\Illuminate\Support\Facades\Route::get('form', Form::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
