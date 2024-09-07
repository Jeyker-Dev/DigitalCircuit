<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\Attributes\On;

class ManageProducts extends Component
{

    public $products;

    public function mount($products)
    {
        $this->products = $products;
    }   // Here End Function

    #[On('deleteProduct')]
    public function deleteProduct(Products $product)
    {
        $product->delete();
        $this->products = Products::all();
    }   // Here End Function

    public function render()
    {
        return view('livewire.manage-products');
    }   // Here End Function   
}   // Here End Class
