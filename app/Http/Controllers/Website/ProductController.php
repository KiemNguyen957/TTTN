<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorylist;

class ProductController extends Controller
{
    public function getSingle_product($id,$name){
        
        $product = Product::findOrFail($id);
        $products_category = Product::where('category_id','=',$product->category_id)->where('id','!=',$product->id)->inRandomOrder()->paginate(4);
        return view('website.single-product',compact(['product','products_category']));
    }
    public function getProducts()
    {
        $categorylist = Categorylist::all();
        return view('website.products',compact('categorylist'));
    }
    public function getListProducts($id)
    {
        $categorylist = Categorylist::all();
        // $category = Categorylist::FindOrFail($id);
        $listproduct = Product::where('category_id',$id)->paginate(9);
        return view('website.products',compact(['categorylist','listproduct']));
    }
}
