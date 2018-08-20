<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product_category()
    {
        return $this->hasMany('App\Product');
    }
}
