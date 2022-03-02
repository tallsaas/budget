<?php

namespace TallSaas\Budget\Providers;

use TallSaas\Budget\Http\Livewire\Dashboard;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class BudgetServiceProvider extends ServiceProvider 
{
  private $base_path = __DIR__ . '/../../';
  
  public function boot()
  {
    // Livewire::component('tallsaas-budget-dashboard', Dashboard::class);
    
    $this->loadViewsFrom(
      "{$this->base_path}/resources/views", 
      'tallsaas.budget'
    );

    $this->loadTranslationsFrom(
      "{$this->base_path}/lang",
      'tallsaas.budget'
    );

    $this->loadRoutesFrom(
      "{$this->base_path}/routes/budget.php"
    );
  }
}