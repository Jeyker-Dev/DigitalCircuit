<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;

class UpdateBrand extends Component
{
    public $name;
    public $brand;

    public function mount()
    {
        $this->messages();
        $this->name = $this->brand->name;
    }   // Here End Function

    public function update()
    {
        $validated = $this->validate([
            "name" => "required|min:3"
        ]);

        $this->brand->update([
            "name" => $validated["name"]
        ]);

        session()->flash("message", "The Brand Has Been Updated");

        return redirect()->to(route("table.brands"));
    }   // Here End Function

    public function messages()
    {
        return [
            "name.required" => "The Name Brand Is Required",
            "name.min" => "The Name Brand Must Have At Least 3 Letters"
        ];
    }   // Here End Function
    public function render()
    {
        return view('livewire.update-brand');
    }   // Here End Function
}   // Here End Class
