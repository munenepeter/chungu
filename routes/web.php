<?php

use App\Livewire\Blog\BlogCollection;
use App\Livewire\Blog\BlogIndex;
use App\Livewire\Home;
use App\Livewire\Shop\Collections;
use App\Livewire\Shop\Products;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');

Route::prefix('shop')->group(function () {
    Route::get('collections', Collections::class)->name('collections');
    Route::get('collections/{product}', Products::class);
});

Route::prefix('blog')->group(function () {
    Route::get('/', BlogIndex::class)->name('blog');
    Route::get('/collections', BlogCollection::class)->name('blog.collection');
});

Route::view('/privacy-policy', 'privacy-policy')->name('privacy policy');
Route::view('/help-center', 'help-center')->name('help center');
Route::view('/faqs', 'faqs')->name('faqs');