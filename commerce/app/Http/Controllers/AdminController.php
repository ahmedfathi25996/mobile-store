<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Orders;
use App\Product;
use Charts;
class AdminController extends Controller
{
    public function index()
    {
        $orders_count = Orders::count();
        $chart = Charts::database(Product::all(), 'bar', 'highcharts')
        ->responsive(false)
        ->width(0)
        ->title("Monthly Product Insertion")
        ->elementLabel("Total Products")
        ->dimensions(500, 300)
        ->groupByMonth('2018', true);
        return view('admin.home.index',compact('orders_count','chart'));
    }
}
