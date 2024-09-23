<?php

namespace App\Livewire;

use Livewire\Component;

class SuccessAlert extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.success-alert');
    }
}
