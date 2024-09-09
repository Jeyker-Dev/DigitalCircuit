<?php

namespace App\Livewire;

use Livewire\Component;

class ManageCategories extends Component
{
    public $categories;

    public function mount($categories)
    {
        $this->categories = $categories;
    }   // Here End Function

    public function render()
    {
        return view('livewire.manage-categories');
    }
}
