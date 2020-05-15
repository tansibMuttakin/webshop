<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add($productid){
        $product = Product::find($productid);
        // add the product to cart & associated cart with the authenticated user
        \Cart::session(auth()->id())->add(array( 
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            // 'attributes' => array(),
            // 'associatedModel' => $product
        ));
        return redirect()->back();
    }

    public function index(){

        $cartItems= \Cart::session(auth()->id())->getcontent();
        return view('cart.index')->with('cartItems', $cartItems);
    }

    public function destroy($itemId){
  
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    public function update(Request $request,$itemId){
  
        \Cart::session(auth()->id())->update($itemId,[
            'quantity' =>array(
                'relative' => false,
                'value' => $request->quantity,
            ),
        ]);
        return back();
    }

    public function checkout(){
        $cartItems= \Cart::session(auth()->id())->getcontent();
        return view('cart.checkout')->with('cartItems',$cartItems);
    }
}
