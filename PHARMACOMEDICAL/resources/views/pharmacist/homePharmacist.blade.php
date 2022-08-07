@extends('layouts.appPharmacist')
@section('contentPharmacist')
<h1 class="text-center mt-2 text-uppercase text-dark">Welcome, {{Session::get('user')}}</h1>

<div id="carouselExampleFade" class="carousel slide carousel-fade mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://news.mit.edu/sites/default/files/download/201903/MIT-Inactive-Ingredients-PRESS.jpg" class="d-block w-100" alt="1st pic" width="480" height="700">
    </div>
@endsection