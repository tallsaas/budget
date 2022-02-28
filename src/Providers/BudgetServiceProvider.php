<?php

namespace TallSaas\Budget\Providers;

use TallSaas\Budget\Http\Livewire\Dashboard;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class BudgetServiceProvider extends ServiceProvider 
{
  public function boot()
  {
    Livewire::component('tallsaas-budget-dashboard', Dashboard::class);
  }
}