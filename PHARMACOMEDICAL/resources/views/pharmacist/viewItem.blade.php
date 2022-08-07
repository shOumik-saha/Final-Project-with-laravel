@extends('layouts.appPharmacist')
@section('contentPharmacist')
<head>
<style type="text/css">
.profile{
	
	margin-left: 45%;
	margin-right: 35%;
	box-shadow: 5px 7px 10px rgba(0, 0, 0, .5);
	padding-top: 10px;
}
h1.top{
	font-size: 15px;
	margin-top: 20px;
	
}
h1{
	font-size: 15px;
}
.img{
	border-radius: 0px;
	width: 50%;
	height: 20%;
	margin-left: 5%;
	border-radius:20px;
}
</style>
</head>


<div class="profile">
<h1 align="center">Item Name: {{$pharmaceuticalitems->itemName}}</h1><br>
<h1 align="center">Price: {{$pharmaceuticalitems->price}}</h1><br>
</div>
@endsection