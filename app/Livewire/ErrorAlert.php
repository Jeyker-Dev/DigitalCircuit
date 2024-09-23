<?php

namespace App\Livewire;

use Livewire\Component;

class ErrorAlert extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.error-alert');
    }
}
