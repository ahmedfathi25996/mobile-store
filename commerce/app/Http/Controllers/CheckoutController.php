<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Checkout;
use App\Orders;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $cartItems=Cart::content();
            return view('website.checkout.checkout',compact('cartItems'));

        }
        return redirect('login');
    }

    public function addAddress(Request $request)
    {
        $user=Auth::user();
        //validation
        $this->validate($request,[
         'fname'=>'required',
         'lname'=>'required',
         'country'=>'required',
         'city'=>'required',
         'address'=>'required',
         'zip_code'=>'required',
         'phone_number'=>'required',
         'email'=>'required',
         'card_type'=>'required',
         'card_number'=>'required',
         'card_cvv'=>'required',
         'expire_date_month'=>'required',
         'expire_date_year'=>'required',

        ]);
      

   //add address
   $address= new Checkout;
$address->fname=$request->input('fname');
$address->lname=$request->input('lname');
$address->country=$request->input('country');
$address->city=$request->input('city');
$address->address=$request->input('address');
$address->zip_code=$request->input('zip_code');
$address->phone_number=$request->input('phone_number');
$address->email=$request->input('email');
$address->card_type=$request->input('card_type');
$address->card_number=$request->input('card_number');
$address->card_cvv=$request->input('card_cvv');
$address->expire_date_month=$request->input('expire_date_month');
$address->expire_date_year=$request->input('expire_date_year');

$address->user_id=$user->id;
$address->save();
Orders::createOrder();
Cart::destroy();
return redirect('/products/showall');
    }
}
