@extends('admin.layouts.layout')
@section('title')
  user chart
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



{!! $chart->render() !!}

</div>

</body>

</html>
@endsection