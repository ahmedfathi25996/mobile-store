@extends('layouts.app')
@section('title')
   All Products
@endsection
@section('content')
{!!Html::style('admin/custom/singlepro.css') !!}

<div class="container-fluid">
        <div class="content-wrapper">	
            <div class="item-container">	
                <div class="container">	
                   
                            
                    <div class="col-md-12">
                        <div class="product col-md-3 service-image-left">
                        
                            <center>
                                <img id="item-display" src='{{ asset("images/$product->image") }}' alt=""></img>
                            </center>
                        </div>
                        
                        <div class="container service1-items col-sm-2 col-md-2 pull-left">
                            <center>
                                <a id="item-1" class="service1-item">
                                    <img src='{{ asset("images/$product->image") }}' alt=""></img>
                                </a>
                                <a id="item-2" class="service1-item">
                                    <img src='{{ asset("images/$product->image") }}' alt=""></img>
                                </a>
                                <a id="item-3" class="service1-item">
                                    <img src='{{ asset("images/$product->image") }}' alt=""></img>
                                </a>
                            </center>
                        </div>
                    </div>
                        
                    <div class="col-md-7">
                    <div class="product-title">{{$product->title}}</div>
                        <div class="product-desc">{{$product->description}}</div>
                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                        <hr>
                        <div class="product-price">Network</div>
					    <div class="product-stock">{{$product->network}}</div>
                        <hr>
                        <div class="product-price">Release Date</div>
					    <div class="product-stock">{{$product->release_date}}</div>
                        <hr>
                        <div class="product-price">Camera</div>
					    <div class="product-stock">{{$product->camera}}</div>
                        <hr>
                        <div class="product-price">OS</div>
					    <div class="product-stock">{{$product->os}}</div>
                        <hr>
                        <div class="product-price">CPU</div>
					    <div class="product-stock">{{$product->cpu}}</div>
                        <hr>
                        <div class="product-price">Mobil Size</div>
					    <div class="product-stock">{{$product->size}}</div>
                       <hr>
                       <div class="product-price">Mobil price</div>
                       <div class="product-stock">{{$product->price}} €</div>
                      <hr>
                        <div class="btn-group cart">
                            <button type="button" class="btn btn-primary">
                                Add to cart 
                            </button>
                        </div>
                        
                    </div>
                    
                </div> 
            </div>
           
        </div>
    </div>
    @endsection