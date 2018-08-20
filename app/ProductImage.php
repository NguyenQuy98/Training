<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    // protected $fillable = [
    //     'name',
    //     'url'
    // ];
    // // protected $table = "product_images";
    // // public $timestamps = false;
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    // protected $table = "product_images";
    // protected $primaryKey = "product_id";
    // public $timestamps = false;
}
