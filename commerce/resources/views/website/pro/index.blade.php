@extends('layouts.app')
@section('title')
   All Products
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

@section('content')

{!!Html::style('admin/custom/allpro.css') !!}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



<div class="container">
    @include('flash::message')
    <div class="row">
        
       @include('/website/pro/sidebar')
       
        <div class="col">
               
            <div class="row">
                    @foreach($product as $pro)
                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card" >
                            <div class="shape">
                                    <div class="shape-text">
                                            {{$pro->price}} €							
                                    </div>
                                </div>
                        <img class="card-img-top" src='{{ asset("images/$pro->image") }}' alt="Card image cap" height="250" width="150">
                        <div class="card-body">
                               
                            <h4 class="card-title">{{$pro->title}}</h4>
                            <p class="card-text">{{$pro->description}}</p>
                            <div class="row">
                                    <div class="col">
                                    <a href="/singleproduct/{{$pro->id}}" class="btn btn-primary btn-block">View Details</a>
                                         <a href="/cart/addItem/{{$pro->id}}" class="btn btn-default btn-block"><i class="fa fa-cart-plus"></i> Add to cart</a>
                                    </div>
                                   
                                </div>
                        </div>
                     
                    </div>
                  
                </div>
                @endforeach
                
                                   
                           
               
            </div>
            {{ $product->links() }}
        </div>

    </div>
</div>


@include('sweet::alert')

@endsection




