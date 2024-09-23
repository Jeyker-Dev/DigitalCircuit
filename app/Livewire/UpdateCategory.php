<?php

namespace App\Livewire;

use App\Models\Categories;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $category;
    public $category_id;
    public $name;

    public function mount(Categories $category)
    {
        $this->messages();
        $this->category = $category;
        $this->category_id = $category->id;
        $this->name = $category->name;
    }   // Here End Function

    public function update()
    {
        $validated = $this->validate([
            "name" => "required|min:3"
        ]);

        $category_new = $this->category->find($this->category_id);
        $category_new->update([
            "name" => $validated["name"]
        ]);

        session()->flash("message", "The Category Has Been Updated");

        return redirect()->to(route("table.categories"));
    }   // Here End Function

    public function messages()
    {
        return [
            "name.required" => "The Category Name is Required",
            "name.min" => "The Name Must Have At Least 3 Letters"
        ];
    }   // Here End Function

    public function render()
    {
        return view('livewire.update-category');
    }   // Here End Function
}   // Here End Class
