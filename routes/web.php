<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');

Route::view('/privacy-policy', 'privacy-policy');