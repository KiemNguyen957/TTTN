<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorylist;

class ProductController extends Controller
{
    public function getSingle_product($slug){
        
        $product = Product::where('slug','=',$slug)->first();
        $products_category = Product::where('category_id','=',$product->category_id)->where('slug','!=',$product->slug)->inRandomOrder()->paginate(4);
        return view('website.single-product',compact(['product','products_category']));
    }
    public function getProducts()
    {
        $catelogs = Categorylist::all();
        //dd($categorylist);
        $allproduct = Product::inRandomOrder()->paginate(9);
        return view('website.products',compact(['catelogs','allproduct']));
    }
    public function getListProducts($slug)
    {
        $catelogs = Categorylist::all();
        $cat = Categorylist::where('slug','=',$slug)->first();
        //dd($categorylist->id);
        // $category = Categorylist::FindOrFail($id);
        $listproduct = Product::where('category_id',$cat->id)->paginate(9);
        return view('website.products',compact(['cat','listproduct','catelogs']));
    }
}
