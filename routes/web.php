<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/counter', \App\Livewire\Counter::class)->name('counter');


Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('users.show');
Route::get('/users', \App\Livewire\Users\Index::class)->name('users.index');
Route::get('/users/{id}/edit', \App\Livewire\Users\Edit::class)->name('users.edit');