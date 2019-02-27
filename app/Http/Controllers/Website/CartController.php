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
    public function getAddtoCart( Request $request){
		if($request->ajax()){
			$id = $request->post('id'); 
            $product = Product::findOrFail($id);
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart->addItem($product,$id);
			$request->session()->put('cart',$cart);
			echo json_encode($cart->items);      
		}
    }
    public function deleteCart(Request $request){
		
		if($request->ajax()){
			$id = $request->post('id');
			$oldCart = Session::has('cart')?Session::get('cart'):null;
			$cart = new Cart($oldCart);
			$cart->removeItems($id);
			Session::put('cart',$cart);
			if(count($cart->items)>=0){
				echo json_encode($cart->items);
			}
			if(count($cart->items)==0){
				Session::forget('cart');
			}
		}
	}
	public function deleteOneCart(Request $request){
		if($request->ajax()){
			$id = $request->post('id');
			$oldCart = Session::has('cart')?Session::get('cart'):null;
			$cart = new Cart($oldCart);
			$cart->removeItem($id);
			if(count($cart->items)>=0){
				Session::put('cart',$cart);
				echo json_encode($cart->items);
			}if(count($cart->items)==0){
				Session::forget('cart');
			}
		}
    }

}
