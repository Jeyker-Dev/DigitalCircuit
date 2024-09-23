<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "price",
        "categories_id",
        "brands_id",
        "stock",
        "image"
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, "categories_id");
    }   // Here End Function

    public function brands()
    {
        return $this->belongsTo(Brand::class, "brands_id");
    }   // Here End Function
}   // Here End Class
