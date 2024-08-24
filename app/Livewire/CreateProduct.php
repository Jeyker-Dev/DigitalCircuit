<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Products;
use App\Models\Categories;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;

class CreateProduct extends Component
{
    public $name;
    public $description;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $image;

    use WithFileUploads;
    

    public function mount()
    {
        $this->messages();
    }   // Here End Function

    public function save()
    {
        $validated = $this->validate([
            "name" => "required|min:3",
            "description" => "required|min:10",
            "price" => "required|numeric",
            "category" => "required",
            "brand" => "required",
            "stock" => "required|integer|min:0",
            "image" => "required|image|max:1024"
        ]);

        if($this->image)
        {
            // Get A Unique Name
            $imageName = time() . '.' . $this->image->extension();

            // Resize Image
            $imageServer = ImageManager::imagick()->read( $this->image );
            $imageServer->resize(1000, 1000);

            // Save Resize Image
            $imageServer->save(public_path('uploads/' . $imageName));

            // Change the Image For The Name
            $validated["image"] = $imageName;
        }   // Here End If

        Products::create([
            "name" => $validated["name"],
            "description" => $validated["description"],
            "price" => $validated["price"],
            "categories_id" => $validated["category"],
            "brands_id" => $validated["brand"],
            "stock" => $validated["stock"],
            "image" => $validated["image"]
        ]);

        session()->flash("message", "The Product Has Been Created Correctly");

        return redirect()->to(route('table.products'));
    }   // Here End Function

    public function messages()
    {
        return [
            "name.required" => "The Field Name Is Required",
            "name.min" => "The Name of Product Require At Least 3 Letters",
            "description.required" => "The Field Description Is Required",
            "description.min" => "The Description of Product Require At Least 20 Letters",
            "price.required" => "The Field Price Is Required",
            "price.numeric" => "The Price Must Be Numeric",
            "category.required" => "The Field Categories Is Required",
            "brand.required" => "The Field Brands Is Required",
            "stock.required" => "The Field Stock Is Required",
            "stock.integer" => "The Field Stock Must Be Numbers",
            "stock.min" => "The Stock Must Be Positive Numbers",
            "image.required" => "The Field Image Is Required",
            "image.image" => "The Field Must Be A Image",
            "image.max" => "The Image Must Be 1MB or Less"

        ];
    }   // Here End Function
    public function render()
    {
        $categories = Categories::all();
        $brands = Brand::all();
        return view('livewire.create-product', [
            "categories" => $categories,
            "brands" => $brands
        ]);
    }   // Here End Function
}   // Here End Class
