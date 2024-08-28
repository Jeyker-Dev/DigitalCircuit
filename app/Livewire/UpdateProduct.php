<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Products;
use App\Models\Categories;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class UpdateProduct extends Component
{
    public $product;
    public $product_id;
    public $name;
    public $description;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $image;
    public $image_new;

    use WithFileUploads;

    public function mount(Products $product)
    {
        $this->messages();
        $this->product = $product;
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category = $product->categories_id;
        $this->brand = $product->brands_id;
        $this->stock = $product->stock;
        $this->image = $product->image;
    }   // Here End Function

    public function update()
    {
        $validated = $this->validate([
            "name" => "required|min:3",
            "description" => "required|min:10",
            "price" => "required|numeric",
            "category" => "required",
            "brand" => "required",
            "stock" => "required|integer|min:0",
            "image_new" => "required|image|max:1024"
        ]);

        if ($this->image_new) 
        {
            if ($this->image && file_exists(public_path('uploads/' . $this->image))) 
            {
                unlink(public_path('uploads/' . $this->image));
            }   // Here End If

            $imageName = time() . '.' . $this->image_new->extension();
    
            $imageServer = ImageManager::imagick()->read( $this->image_new );
            $imageServer->resize(1000, 1000);
    
            $imageServer->save(public_path('uploads/' . $imageName));
    
            $validated["image_new"] = $imageName;
        }   // Here End If
        else 
        {
            // Mantener la imagen existente si no se sube una nueva
            $validated["image_new"] = $this->image;
        }   // Here End Else

        $product_new = $this->product->find($this->product_id);

        $product_new->update([
            'name' => $validated["name"],
            'description' => $validated["description"],
            'price' => $validated["price"],
            'categories_id' => $validated["category"],
            'brands_id' => $validated["brand"],
            'stock' => $validated["stock"],
            'image' => $validated["image_new"]
        ]);

        session()->flash("message", "The Product Has Been Updated");

        return redirect()->to(route("table.products"));
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
            "image_new.required" => "The Field Image Is Required",
            "image_new.image" => "The Field Must Be A Image",
            "image_new.max" => "The Image Must Be 1MB or Less"

        ];
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
