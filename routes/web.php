<?php

use App\Livewire\Poem;

use App\Http\Livewire\Form;
use App\Livewire\Collection;
use Illuminate\Support\Facades\Route;

Route::get('form', Form::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/collections', Collection::class);

Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/poems', Poem::class);

