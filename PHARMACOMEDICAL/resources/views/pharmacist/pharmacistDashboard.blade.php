@extends('layouts.appPharmacist')
@section('contentPharmacist')
@push('css')
  '  <link 'rel="stylesheet" href="{{ URL::asset('./assets/css/animate.css') }}" />
  '  <li'nk rel="stylesheet" href="{{ URL::asset('./assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/choosen.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/color-01.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/style.css') }}" />
@endpush
<html>
<head>
<style>

#item {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#item td, #item th {
  border: 1px solid #ddd;
  padding: 8px;
}

#item tr:nth-child(even){background-color: #f2f2f2;}

#item tr:hover {background-color: #ddd;}

#item th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body style="background:white">
   <center><div class="head"><h1>Dashboard</h1><a style="text-align: center;" href="{{route('pharmacistProfile')}}"><h3>Welcome, {{Session::get('user')}}</h3></center>
    </a>
</div>
<br><br>
<center>
<h1>pharmaceutical items</h1>
<table id="item">
    <tr>
        <td>item ID</td>
        <td>item Name</td>
        <td>Price</td>
</tr>
@foreach($pharmaceutical_items as $pharmaceuticalitems)
<tr>
        <td>{{$pharmaceuticalitems['pharmaceuticalItemID']}}</td>
        <td>{{$pharmaceuticalitems['itemName']}}</td>
        <td>{{$pharmaceuticalitems['price']}}</td>
</tr>
@endforeach
</table>
</center>
</body>
</html>
@endsection