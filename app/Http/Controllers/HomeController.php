<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(Auth::User()->role === 1){
            $items=Item::OrderByDesc('id')->get();
            return view('admin.home',['items'=>$items]);
        }
        $orders = Order::OrderByDesc('id')->get();
        return view('home',['orders'=>$orders]);
    }

}
