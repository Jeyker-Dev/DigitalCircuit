<?php

namespace App\Livewire;

use App\Models\Categories;
use Livewire\Attributes\On;
use Livewire\Component;

class ManageCategories extends Component
{
    public $categories;

    public function mount($categories)
    {
        $this->categories = $categories;
    }   // Here End Function

    #[On("deleteCategory")]
    public function deleteCategory(Categories $category)
    {
        $category->delete();
        $this->categories = Categories::all();
    }   // Here End Function

    public function render()
    {
        return view('livewire.manage-categories');
    }   // Here End Function
}   // Here End Class
