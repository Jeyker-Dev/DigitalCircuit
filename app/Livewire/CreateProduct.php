<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\Categories;

class CreateProduct extends Component
{
    public $name = "";
    public $description = "";
    public $price = "";
    public $categories = [];
    

    public function mount()
    {
        $this->categories = Categories::all();
    }   // Here End Function

    public function save()
    {
        Products::create([
            "name" => $this->name,
            "description" => $this->description,
            "price" => $this->price
        ]);

    }   // Here End Function
    public function render()
    {
        return view('livewire.create-product', [
            "categories" => $this->categories
        ]);
    }   // Here End Function
}   // Here End Class
