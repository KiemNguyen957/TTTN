<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products_new = Product::where('sale','=',0)->orderBy('created_at', 'desc')->paginate(10);
        $products_sale = Product::where('sale','!=',0)->orderBy('created_at', 'desc')->paginate(10);
        return view('website.index',compact(['products_new','products_sale']));
    }
}
