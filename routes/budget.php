<?php

use TallSaas\Budget\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
  Route::prefix('budget')->group(function() {

    Route::get('dashboard', Dashboard::class)->name('tallsaas.budget.dashboard');
    
  });
});