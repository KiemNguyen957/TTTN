<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Cart;
use Session;
class CartController extends Controller
{
    public function index(){
    	return view('website.cart');
    }
    public function getAddtoCart( Request $request,$id){
    	$product = Product::findOrFail($id);
    	$oldCart = Session('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart->addItem($product,$id);
    	$request->session()->put('cart',$cart);
    	return redirect()->back();
    }
    public function deleteCart($id){
    	$oldCart = Session::has('cart')?Session::get('cart'):null;
    	$cart = new Cart($oldCart);
    	$cart->removeItem($id);
    	if(count($cart->items)>0){
    		Session::put('cart',$cart);
    	}else{
    		Session::forget('cart');
    	}
    	return redirect()->back();
    }
    public function deleteallCart(){
        Session::forget('cart');
        return redirect()->back();
    }
}
