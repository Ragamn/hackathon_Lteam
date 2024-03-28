<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function index(){
        $param = [
            'seats_id' => $_COOKIE[''],
            'product_id' => $_COOKIE[''],
            'group_id' => $_COOKIE[''],
            'price' => $_COOKIE[''],
            'quantity' => $_COOKIE[''],
        ];
        $items = Order::insert($param);
        return view('',['items'=>$items]);
    }
}
