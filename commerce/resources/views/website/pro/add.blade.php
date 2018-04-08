@extends('layouts.app')

@section('title')
Add Product
@endsection

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/products') }}" enctype="multipart/form-data" >
    

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
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('bu_name') }}">
    
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
                                        <input id="price" type="text" class="form-control" name="price" value="{{ old('bu_price') }}">
        
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
                                            <input id="description" type="text" class="form-control" name="description" value="{{ old('bu_rooms') }}">
            
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
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
                                                                            <label for="bu_image" class="col-md-4 control-label">Product Image</label>
                                                
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
                                        <i class="fa fa-btn fa-building"></i> Add
                                    </button>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</form>
@endsection