<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products_new = Product::orderBy('created_at', 'desc')->paginate(10);
        $products_sale = Product::where('sale','!=',0)->orderBy('created_at', 'desc')->paginate(10);
        return view('website.index',compact(['products_new','products_sale']));
    }
    public function getSingle_product($id){
        dd($id);
        $product = Product::findOrFail($id);
        $products_category = Product::where('category_id','=',$product->category_id)->where('id','!=',$product->id)->inRandomOrder()->paginate(4);
        return view('website.single-product',compact(['product','products_category']));
    }
    public function getProducts()
    {
        return view('website.products');
    }
}
