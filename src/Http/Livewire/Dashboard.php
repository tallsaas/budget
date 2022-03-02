<?php

namespace TallSaas\Budget\Http\Livewire;

use TallSaas\Plaid\Plaid;
use Livewire\Component;

class Dashboard extends Component
{
  public $link_token;

  public function mount()
  {
    $this->link_token = (new Plaid(sandbox: true))->linkTokenCreate();
  }

  public function render()
  {
    return view('tallsaas.budget::livewire.dashboard')->layout('tallsaas.components::layouts.blank');
  }
}