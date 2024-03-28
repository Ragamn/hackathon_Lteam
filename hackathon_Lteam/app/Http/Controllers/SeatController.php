<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class SeatController extends Controller
{
    function index(){
        $items = Seat::all();
        return view('store.index',['items' => $items]);
    }
    function add_session(Request $request){
        $id = $request->id;
        $request->session()->put('seats_id',$id);
        return view('store.order');
    }
}
