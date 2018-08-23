<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class HomeModel extends Model
{
    public function getProduct()
    {
        return DB::table('products')->orderBy('id','desc')->get();
    }

    public function linkProduct()
    {
        $product =DB::table('products');
        return $product->paginate(12);
         
    }

    public function searchProduct($id)
    {
        return DB::table('products')->where('id',$id)->get();
    }

    // public function searchProduct_image($id)
    // {
    //     return DB::table('product_images')->where('product_id',$id)->get();
    // }

    public function getSlideShows()
    {
        return DB::table('slideshows')->orderBy('id','desc')->get();
    }

    public function getGallery()
    {
        return DB::table('gallery')->orderBy('id','desc')->get();
    }

    public function getBlog()
    {
        $product =DB::table('blogs')->get();
        return $product;
    }
    public function searchBlog()
    {
        $id = $_GET['id'];
        return DB::table('blogs')->where('id',$id)->get();
    }

    public function whereAbout()
    {
        return DB::table('abouts')->where('id',1)->get();
    }

    public function getHeading_pages()
    {
        return DB::table('heading_pages')->where('id',1)->get();
    }

    public function getCategory()
    {
        return DB::table('categories')->where('id','<',6)->orderBy('id','desc')->get();
    }
   
}
