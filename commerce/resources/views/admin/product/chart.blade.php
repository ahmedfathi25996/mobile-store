@extends('admin.layouts.layout')
@section('title')
  product chart
@endsection
@section('content')

<!DOCTYPE html>

<html>

<head>

    

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    {!! Charts::assets() !!}

</head>

<body>

<div class="container">

<h1>Product Insertion Chart</h1>

{!! $chart->render() !!}

</div>

</body>

</html>
@endsection