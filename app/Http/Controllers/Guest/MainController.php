<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HomeModel;
use App\Product;
use App\ProductImage;
use App\Category;
use App\Size;
use App\Blog;
use App\Http\Controllers\Auth;
use App\Validator;
use App\User;
use Hash;

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
    public function getProductByCategory($slug)
    {
        $HomeModel = new HomeModel();
        

        $category = Category::where('slug',$slug)->firstOrFail();

        $products = $category->product_category;
        return view('guest.product',['products'=>$products,
        'categories'   =>$HomeModel->getCategory(),
        ]);

    }
      
    
    public function getProduct()
    {
        $products = Product::paginate(12);
        $HomeModel = new HomeModel();
        return view('guest.product',['products'=>$products,
        'categories'   =>$HomeModel->getCategory(),
        ]);
    }
    
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
        $product = Product::where('is_featured',1)->get();
        $HomeModel = new HomeModel();
        return view('guest.blog',['blogs'=>$HomeModel->getBlog(),
        'categories'   =>$HomeModel->getCategory(),
        'product'      =>$product
        ]);
    }
    public function blog_detail()
    {
        $product = Product::where('is_featured',1)->get();
        $HomeModel = new HomeModel();
        return view('guest.blog-detail',[
            'categories'   =>$HomeModel->getCategory(),
            'blogDetail'   => $HomeModel->searchBlog(),
            'product'      =>$product
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
    public function product_detail($id)
    {
        $product_image = Product::find($id);  
        $size = Product::find($id);
        // $size1 = Product::find(1);
        
        // $id = (int)$request->id;
        // $product = App\ProductImage::find($id);
        
        $HomeModel = new HomeModel();
        return view('guest.product-detail',['product_detail'=>$product_image,
            'product' =>$HomeModel->searchProduct($id),
            'categories'   =>$HomeModel->getCategory(),
            'products'=>$HomeModel->getProduct(),
            'sizes' =>$size
        ]
    );
    }
    public function postLogin(Request $req)
    {
        $this->validate($req,[
            'email' =>'required|email',
            'password'  =>'required|alphaNum|min:6'//nho nhat la 6 ky tu
        ]);
        // $login =
        if(Auth::attempt(['email'=>$req->get('email'),'password'=>$req->get('password')])){
            return redirect('guest.home');
        }
        else{
            return redirect()->with(['flag'=>'danger','message'=>'Không thành công']);
        }
    }

    public function postRegister(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email|unique:uses,email',
                'password' =>'required|min:6|max:20',
                'name' => 'required'
            
            ],[
                'email.emal' => 'Không đúng định dạng email',
                'email.unique' =>' Email đã có người sử dụng',
                'password.min' => 'Mat khau ít nhất 6 ký tự'
            ]
            );
            $user = new User();
            $user->name = $req->username;
            $user->email = $req->emailDK;
            $user->password = Hash::make($req->passwordDK);
            return redirect()->back()->whith('DK','Đăng ký thành công');
    }
    public function getSearch(Request $req)
    {
        $HomeModel = new HomeModel();
        $product = Product::where('name','like','%'.$req->search.'%')->orWhere('price',$req->search)->get();
        return view('guest.product',['products'=>$product,
        'categories'   =>$HomeModel->getCategory()
        ]);
    }
    public function getSearchBlog(Request $req)
    {
        $product = Product::where('is_featured',1)->get();
        $HomeModel = new HomeModel();
        $blog = Blog::where('name','like','%'.$req->search.'%')->orWhere('title','like','%'.$req->search.'%')->get();
        return view('guest.blog',['blogs'=>$blog,
        'categories'   =>$HomeModel->getCategory(),
        'product'      =>$product
        ]);
    }
}
