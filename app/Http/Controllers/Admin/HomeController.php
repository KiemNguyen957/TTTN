<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\Product;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $orders = Order::all();
        $products = Product::all();
        $total =0;
        foreach ($orders as $order){
            $total+=$order->total_price;
        }
        return view('admin.index',compact(['orders','products','total']));
    }
}
