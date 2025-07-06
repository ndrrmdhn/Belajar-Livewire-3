<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Livewire\Counter;

Route::get('/counter', Counter::class)->name('counter');