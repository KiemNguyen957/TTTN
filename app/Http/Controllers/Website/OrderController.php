<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function create(Request $request)
    {
        if(Session::has('cart')){
            $cart = Session('cart');
            $detail = json_encode( $cart->items );
            $order = [
                'code' => str_random(10),
                'detail' => $detail,
                'user_id' => Auth::guard('web')->user()->id,
                'unit_price' => $cart->totalPrice,
                'status' => 1
            ];
            Order::create($order);
            return redirect()->route('web.cart')->with("alert",$order['code']);
        }
        else{
            return redirect()->back()->with('no_product',"Bạn chưa có sản phẩm nào trong giỏ hàng");
        }
    }
}
