<?php

namespace App\Livewire;

use App\Models\Categories;
use Livewire\Component;

class CreateCategory extends Component
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

        Categories::create([
            "name" => $validated["name"]
        ]);

        session()->flash("message", "The Category Has Been Created");

        return redirect()->to(route('table.categories'));
    }   // Here End Function

    public function messages()
    {
        return [
            "name.required" => "The Name Of Category is Required",
            "name.min" => "The Name Of Category Must Have More Than 3 Letters"
        ];
    }   // Here End Function

    public function render()
    {
        return view('livewire.create-category');
    }   // Here End Function
}   // Here End Class
