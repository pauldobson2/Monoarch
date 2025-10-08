<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sub_category()
    {
        return $this->hasMany(SubCategory::class, 'category');
    }
    public function category()
    {
        return $this->hasMany(CategoryArtical::class, 'category_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}