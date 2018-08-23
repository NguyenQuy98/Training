<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'main_image', 
        'description',
        'price',
        'amount',
        'is_featured',
        'status',
        'flag'
    ];
   
        
    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    // protected $table = "products";
    // protected $primaryKey = "id";
    public $timestamps = false;
    public function size()
    {
        return $this->belongsToMany('App\Size');
    }

}