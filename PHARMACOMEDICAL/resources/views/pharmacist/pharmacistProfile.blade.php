@extends('layouts.appPharmacist')
@section('contentPharmacist')
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/choosen.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/color-01.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('./assets/css/style.css') }}" />
@endpush
    <div>
    <center><img src="{{ URL::asset('./images/profile/vector.jpg')}}" width="300" height="300"  alt="" /></center>
    </div>
<div class="profile" style="background:rgb(219, 78, 200);">
<h1 class="top">Name: {{Session::get('user')}}</h1><br>
<h3>Email: {{Session::get('email')}}</h3><br>
<h3>Phone: {{Session::get('phoneNumber')}}</h3><br>
<h3>Dath of birth: {{Session::get('dob')}}</h3><br>
<h3>gender: {{Session::get('gender')}}</h3><br>
<h3>Role: {{Session::get('role')}}</h3><br>
</div>
@endsection




