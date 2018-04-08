@extends('admin.layouts.layout')
@section('title')
  Edit Product
@endsection
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">
{!! Form::open(['action' => ['ProductController@update',$product->id],'method' => 'PATCH']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $product->title,['class' => 'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::text('price', $product->price ,['class' => 'form-control','placeholder'=>'Price'])}}
    </div>
    <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $product->description ,['class' => 'form-control','placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
                {{Form::label('network', 'Network')}}
                {{Form::text('network', $product->network ,['class' => 'form-control','placeholder'=>'Network'])}}
            </div>

            <div class="form-group">
                    {{Form::label('release_date', 'Release Date')}}
                    {{Form::text('release_date', $product->release_date ,['class' => 'form-control','placeholder'=>'Release Date'])}}
                </div>

                <div class="form-group">
                        {{Form::label('camera', 'Camera')}}
                        {{Form::text('camera', $product->camera ,['class' => 'form-control','placeholder'=>'Camera'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('os', 'OS')}}
                            {{Form::text('os', $product->os ,['class' => 'form-control','placeholder'=>'OS'])}}
                        </div>   

                        <div class="form-group">
                                {{Form::label('size', 'Size')}}
                                {{Form::text('size', $product->size ,['class' => 'form-control','placeholder'=>'Size'])}}
                            </div>   

                            <div class="form-group">
                                    {{Form::label('cpu', 'CPU')}}
                                    {{Form::text('cpu', $product->cpu ,['class' => 'form-control','placeholder'=>'CPU'])}}
                                </div>   
        <div class="form-group">
                {{Form::label('status', 'Status')}}
                {!!Form::select('status',['0'=>'Not Activated','1'=>'Activated'],$product->status,['class'=>'form-control']) !!}
            </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection