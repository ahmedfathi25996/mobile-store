@extends('layouts.app')
@section('title')
  Cart
@endsection
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<div class="container mb-4">
        @include('flash::message')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $row)
                        <tr>
                            <td><img src='{{ asset("images/{$row->options->image}") }}' width="100px"/> </td>
                        <td>{{$row->name}}</td>
                            <td>In stock</td>
                        <td><input class="form-control" type="text" value="{{$row->qty}}" /></td>
                            <td class="text-right">{{$row->price}} </td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><a href="/cart/destroy/{{$row->rowId}}"><i class="fa fa-trash"></i></a> </button> </td>
                        </tr>
                       
                       
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>SubTotal</strong></td>
                            <td class="text-right"><strong>{{$row->subtotal}} €</strong></td>
                        </tr>
                     

                       

                        
                        @endforeach() 
                       
                        <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"></td>
                            </tr>

                        <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Shipping</strong></td>
                                <td class="text-right"><strong>FREE</strong></td>
                            </tr>
                            
                        <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total Price</strong></td>
                                <td class="text-right"><strong>{{Cart::total()}} €</strong></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                        <a href="/products/showall" class="btn btn-block btn-light">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                        <a href="/checkout" class="  btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                  
                </div>
            </div>
        </div>
    </div>
    
</div>

@include('sweet::alert')
@endsection