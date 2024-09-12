<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageBrands extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = Brand::all();
    }   // Here End FUnction

    #[On("deleteBrand")]
    public function deleteBrand(Brand $brand)
    {
        $brand->delete();
    }   // Here End Function

    public function render()
    {
        return view('livewire.manage-brands');
    }   // Here End Function
}   // Here End Class
