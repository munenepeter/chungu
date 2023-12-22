<?php

use App\Livewire\Home;
use App\Livewire\Shop\Collections;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');

Route::get('collections',Collections::class)->name('collections');

Route::view('/privacy-policy', 'privacy-policy');