<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class CreateBrand extends Component
{
    public $name;
    public function mount()
    {
        $this->messages();
    }   // Here End Function

    public function save()
    {
        $validated = $this->validate([
            "name" => "required|min:3"
        ]);

        Brand::create([
            "name" => $validated["name"]
        ]);

        session()->flash("message", "The Brand Has Been Created");

        return redirect()->to(route('table.brands'));
    }   // Here End Function

    public function messages()
    {
        return [
            "name.required" => "The Product Brand Is Required",
            "name.min" => "The Product Brand Name Must To Have At Least 3 Letters"
        ];
    }   // Here End Function
    public function render()
    {
        return view('livewire.create-brand');
    }   // Here End Function
}   // Here End Class
