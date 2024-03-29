<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Product;

class SeatController extends Controller
{
    function index(){
        if(session()->get('admin') == 1){
            return view('store.selection');
        }
        $items = Seat::all();
        return view('store.index',['items' => $items]);
    }
    function add_session(Request $request){
        $id = $request->id;
        $request->session()->put('seats_id',$id);
        $items = product::select()->get();
        return view('store.order',['items'=>$items]);
        return view('store.order');
    }
}
