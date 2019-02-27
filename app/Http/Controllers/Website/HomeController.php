<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorylist;


class HomeController extends Controller
{
    public function index()
    {
        $products_new = Product::where('sale','=',0)->orderBy('created_at', 'desc')->paginate(10);
        $products_sale = Product::where('sale','!=',0)->orderBy('created_at', 'desc')->paginate(10);
        return view('website.index',compact(['products_new','products_sale']));
    }
    public function getContact()
    {
        return view('website.contact');
    }
    public function search(Request $request)
    {
        $catelogs = Categorylist::all();
        $input = $request->search_input;
        $products = Product::where('name','like','%'.$input.'%')->paginate(9);
        //dd($products);
        if(count($products)>0){
            return view('website.products',compact(['products','catelogs']));
        }
        else {
            $notfound = 'Không tìm thấy kết quả';
            return view('website.products',compact(['catelogs','notfound']));
        }
    }
        
}
