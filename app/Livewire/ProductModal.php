<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ProductModal extends Component
{
    public $tallstackui = false;
    public function toggleModal()
    {
        $this->tallstackui = !$this->tallstackui;
    }

    public function hideModal()
    {
        $this->tallstackui = false;
    }

    public function render()
    {
        return view('livewire.product-modal');
    }
}