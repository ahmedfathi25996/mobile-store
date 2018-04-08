<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    protected $table="product";
    protected $fillable = [
        'id', 'title', 'price', 'description', 'network', 'releate_date', 'camera', 'os', 'size', 'cpu', 'image', 'user_id','created_at', 'updated_at','categ',
    ];
}
