<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HomeModel;
use App\Product;
use App\ProductImage;
use App\Category;

class MainController extends Controller
{
    public function main()
    {
        $HomeModel = new HomeModel();
        return view('guest.home',[
            'products'=>$HomeModel->getProduct(),
            'slides'  =>$HomeModel->getSlideShows(),
            'gallerys'=>$HomeModel->getGallery(),
            'blogs'   =>$HomeModel->getBlog(),
            'categories'   =>$HomeModel->getCategory()
            ]);
    }
    
   
    public function contact()
    {
        $HomeModel = new HomeModel();
        return view('guest.contact',[
            'categories'   =>$HomeModel->getCategory()
        ]);
    }
    public function product()
    {
        $HomeModel = new HomeModel();
        return view('guest.product',['linkProduct'=>$HomeModel->linkProduct(),
        'categories'   =>$HomeModel->getCategory()
        ]);
    }
    public function product_detail($id)
    {
        $product_image = Product::find($id);
        // $id = (int)$request->id;
        // $product = App\ProductImage::find($id);
        $HomeModel = new HomeModel();
        return view('guest.product-detail',['product_detail'=>$product_image,
            'product' =>$HomeModel->searchProduct($id),
            'categories'   =>$HomeModel->getCategory(),
            'products'=>$HomeModel->getProduct()
        ]
    );
    }
    // public function category($category)
    // {
    //     $product_category = Category::find($category)->product_category;
    //     return view('guest.category',[
    //         'produc_category'=>$product_category
    //         ]);
    // }
    public function cart()
    {
        $HomeModel = new HomeModel();
        return view('guest.cart'
        ,[
            'categories'   =>$HomeModel->getCategory()
        ]);
    }
    public function blog()
    {
        $HomeModel = new HomeModel();
        return view('guest.blog',['blogs'=>$HomeModel->getBlog(),
        'categories'   =>$HomeModel->getCategory()
        ]);
    }
    public function blog_detail()
    {
        $HomeModel = new HomeModel();
        return view('guest.blog-detail',[
            'categories'   =>$HomeModel->getCategory()
        ]);
    }
    public function about()
    {
        $HomeModel = new HomeModel();
        return view('guest.about',
        ['abouts'=>$HomeModel->whereAbout(),
         'heading_pages'=>$HomeModel->getHeading_pages(),
        'categories'   =>$HomeModel->getCategory()
        ]);
    }
}
