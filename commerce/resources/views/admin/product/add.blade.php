@extends('admin.layouts.layout')
@section('title')
  Add New Product
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/products') }}" enctype="multipart/form-data">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('name') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('email') }}">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{ old('email') }}">
    
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('network') ? ' has-error' : '' }}">
                                    <label for="network" class="col-md-4 control-label">Network</label>
        
                                    <div class="col-md-6">
                                        <input id="network" type="text" class="form-control" name="network" value="{{ old('network') }}">
        
                                        @if ($errors->has('network'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('network') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('release_date') ? ' has-error' : '' }}">
                                        <label for="release_date" class="col-md-4 control-label">Release Date</label>
            
                                        <div class="col-md-6">
                                            <input id="release_date" type="text" class="form-control" name="release_date" value="{{ old('release_date') }}">
            
                                            @if ($errors->has('release_date'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('release_date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('camera') ? ' has-error' : '' }}">
                                            <label for="camera" class="col-md-4 control-label">Camera</label>
                
                                            <div class="col-md-6">
                                                <input id="camera" type="text" class="form-control" name="camera" value="{{ old('camera') }}">
                
                                                @if ($errors->has('camera'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('camera') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('os') ? ' has-error' : '' }}">
                                                <label for="os" class="col-md-4 control-label">OS</label>
                    
                                                <div class="col-md-6">
                                                    <input id="os" type="text" class="form-control" name="os" value="{{ old('os') }}">
                    
                                                    @if ($errors->has('os'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('os') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                                                    <label for="size" class="col-md-4 control-label">Size</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="size" type="text" class="form-control" name="size" value="{{ old('size') }}">
                        
                                                        @if ($errors->has('size'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('size') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('cpu') ? ' has-error' : '' }}">
                                                        <label for="cpu" class="col-md-4 control-label">CPU</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="cpu" type="text" class="form-control" name="cpu" value="{{ old('cpu') }}">
                            
                                                            @if ($errors->has('cpu'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('cpu') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                
            
        
                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status" class="col-md-4 control-label">Status</label>
        
                                    <div class="col-md-6">
                                            {!!Form::select('status',['0'=>'Not Activated','1'=>'Activated'],null,['class'=>'form-control']) !!}
        
                                        @if ($errors->has('status'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('categ') ? ' has-error' : '' }}">
                                        <label for="categ" class="col-md-4 control-label">Category</label>
            
                                        <div class="col-md-6">
                                                {!!Form::select('categ',['0'=>'Iphone','1'=>'Huawei','2'=>'Motrla','3'=>'Oppo','4'=>'Samsung'],null,['class'=>'form-control']) !!}
            
                                            @if ($errors->has('categ'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('categ') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                      

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-md-4 control-label">Product Image</label>
    
                                <div class="col-md-6">
                                        
                                       {{Form::file('image')}}
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Product
                                </button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweet::alert')
@endsection