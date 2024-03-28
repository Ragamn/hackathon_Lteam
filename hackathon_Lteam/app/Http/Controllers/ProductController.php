<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    function index(){
        $items = product::select()->get();
        return view('store.order',['items'=>$items]);
    }
    public function addCart(Request $request)
    {
        $productId = $request->input('product_id');

        // カートのセッションを取得
        $cart = $request->session()->get('cart', []);

        // カートに商品を追加
        $cart[] = $productId;

        // カートをセッションに保存
        $request->session()->put('cart', $cart);

        return response()->json(['message' => 'カートに商品を追加しました']);
    }


    public function showCart(Request $request)
    {
        // カートの中身を取得
        $cart = $request->session()->get('cart', []);
        // カートの中身を表示
        dd($cart);
    }
}
