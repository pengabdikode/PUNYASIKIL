<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        $cart = Cart::getContent();
        return view('cart.index', [
            'data' => $cart
        ]);
    }

    public function addItem($id){
        $pro =  Product::find($id);
        Cart::add(array(
            'id' => $pro->id,
            'name' => $pro->name,
            'price' => $pro->price,
            'quantity' => 1,
            'attributes' => array()
        ));

        return redirect()->back();
       
    }

    public function removeItem($id){
        Cart::remove($id);
        return back();
    }
}
