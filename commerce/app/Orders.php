<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
Use App\Product;

class Orders extends Model
{
    protected $table="orders";
    protected $fillable = [
        'id', 'total', 'user_id', 'created_at', 'updated_at',    
    ];
   

    public function ordersFields()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }

    public static function createOrder()
    {
        //insert into database
        $user=Auth::user();
        $order=$user->orders()->create(['total'=>Cart::total()]);
        $cartItems= Cart::content();

        foreach($cartItems as $row){
            $order->ordersFields()->attach($row->id,['qty'=>$row->qty,'total'=>Cart::total()]);
        }
    }
   
}
