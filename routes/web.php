<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    //Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');

    Route::view('profile', 'profile')->name('profile');

    Route::get('customers', \App\Livewire\Pages\Customers\CustomerList::class)->name('customers');
    Route::get('customers/create', \App\Livewire\Pages\Customers\AddCustomer::class)->name('add-customer');
});

require __DIR__.'/auth.php';
