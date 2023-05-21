<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\cookRequest;

class ProductController extends Controller
{
    // This method only use website slider

    public function productFetch()
    {
        $product = Product::with('category')->orderBy('id','desc')->limit(1)->get();
        $product2 = Product::with('category')->orderBy('id','desc')->get();
        return view('frontend.pages.home',['products'=>$product,'products2'=>$product2]);
    }


    public function index()
    {
        $productInfo = Product::orderBy('id','DESC')->get();
        return view('backend.product.index',['products'=>$productInfo]);
    }

    public function create()
    {
        $category = Category::latest('id')->where('status',1)->get();
        return view('backend.product.create',['catStatus'=>$category]);
    }



  // product with image upload

  public function store(cookRequest $request)
  {
      $data = $request->except('_token');
      //$data['product_slug']= Str::slug($request->product_slug);

      // image uploade
      if($request->hasFile('image')){

          $product_file = $request->file('image');
          $file_extension = $product_file->getClientOriginalExtension();
          $product_image_name =  time().rand().'.'.$file_extension;
          $product_file->move('images/products/',$product_image_name);
          $data['image'] = $product_image_name;


          //ata avabe hote pare // database a admin name akta row nite hobe
          //$data['admin']= Auth::user()->admin_name


      }

        Product::create($data);

      return back()->with('success','Product has been Saved.');

  }



//   product Edit

public function edit($product_id)
{
    $category = Category::latest('id')->where('status',1)->get();
    $product = Product::findOrFail($product_id);
    return view('backend.product.edit',['categories'=>$category,'catStatus'=>$product]);
}



// product update

public function update(Request $request,$product_id)
{
    $data = $request->except('_token');

    $product = Product::findOrFail($product_id);

    // image upload
    if($request->hasFile('image')){
        if ($product->image != '') {
            file_exists('images/products/'.$product->image) ? unlink('images/products/'.$product->image) : false;
        }
        $product_file = $request->file('image');
        $file_extension = $product_file->getClientOriginalExtension();
        $product_image_name =  time().rand().'.'.$file_extension;
        $product_file->move('images/products/',$product_image_name);
        $data['image'] = $product_image_name;
    }else {
        $data['image'] = $product->image;
    }
      $product->update($data);

    return back()->with('success','Product has been Updated.');
}






}
