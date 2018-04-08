<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Alert;
use App\Http\Requests;
use App\Product;
class CartController extends Controller
{
    public function index()
    {
        $cartItems=Cart::content();
        return view('website.cart.index',compact('cartItems'));
    }
    public function addItem($id)
    {
        
        $product=Product::find($id);


        Cart::add($id, $product->title, 1 , $product->price,['image'=>$product->image]);
        
        flash('Product has been added to cart successfuly ')->success();
        return back();
    }

    public function destroy($id)
    {

        Cart::remove($id);
        flash('Product has been deleted to cart successfuly')->warning();
      
        return back();
    }
}
