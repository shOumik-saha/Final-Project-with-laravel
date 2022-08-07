@extends('layouts.appPharmacist')
@section('contentPharmacist')
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $pharmaceuticalitems->name }}</h5>
        <p class="card-text">Price : {{ $pharmaceuticalitems->price }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
@endsection