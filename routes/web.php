<?php

use App\Livewire\Home;
use App\Livewire\Shop\Collections;
use App\Livewire\Shop\Products;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');

Route::prefix('shop')->group(function () {
    Route::get('collections', Collections::class)->name('collections');
    Route::get('collections/{slug}', Products::class);
});

Route::view('/privacy-policy', 'privacy-policy');
