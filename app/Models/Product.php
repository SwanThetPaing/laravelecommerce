<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Brand;
class Product extends Model
{
    
    public function category () {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand () {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

}
