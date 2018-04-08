<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table="shipping_address";
    protected $fillable = [
        'id', 'fname', 'lname', 'country' , ' city', 'address', 'zip_code', 'phone_number', 'email', 'user_id','card_type', 'card_number', 'card_cvv', 'expire_date_month', 'expire_date_year', 'created_at','updated_at'
    ];
    
}
