<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->get('/', 'HomeController')->name('home');

Route::livewire('users/table', 'users.table')->layout('layouts.app', ['title' => 'Users Data Table']);
Route::livewire('products', 'products.index')->layout('layouts.app', ['title' => 'All Products']);
