<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Categories;
use App\Models\Products;
use Livewire\WithFileUploads;

class UpdateProduct extends Component
{
    public $product;
    public $name;
    public $description;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $image;

    use WithFileUploads;

    public function mount(Products $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category = $product->categories_id;
        $this->brand = $product->brands_id;
        $this->stock = $product->stock;
    }   // Here End Function

    public function render()
    {
        $categories = Categories::all();
        $brands = Brand::all();
        return view('livewire.update-product', [
            "categories" => $categories,
            "brands" => $brands
        ]);
    }   // Here End Function
}   // Here End Class
