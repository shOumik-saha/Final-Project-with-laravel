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
       

    <div class="container">

        
          

<form action="{{route('updatePharmacistProfile')}}" class="form-group" method="post" align="center" style="">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
<center>
 <div class="col-md-9 form-group">
        <span class="id">Name</span>
        <input type="text" name="name" value="{{Session::get('user')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>



    <div class="col-md-9 form-group">
        <span class="id">Date of Birth</span>
        <input type="date" name="dob" value="{{Session::get('dob')}}"class="form-control">
    </div>


    <div class="col-md-9 form-group">
        <span class="id">Email</span>
        <input type="text" name="email" value="{{Session::get('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Phone</span>
        <input type="text" name="phone" value="{{Session::get('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

</center>
    <div class="p">
    <div class="d-grid col-12 mx-auto">
            <input type="submit" class="btn btn-primary" value="Update" >
    </div>
</div>

</form>

</div>    
@endsection