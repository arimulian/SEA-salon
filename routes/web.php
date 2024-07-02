<?php

use Illuminate\Support\Facades\Route;

Route::get('/reservation', \App\Livewire\Reservation::class)->name('reservation');
Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/services', \App\Livewire\Service::class)->name('service');
Route::get('/contacts', \App\Livewire\Contact::class)->name('contact');
