<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\Home;

Route::get('/', Home::class)->name('home');

Route::get('/counter', Counter::class)->name('counter');