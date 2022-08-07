@extends('layouts.appPharmacist')
@section('contentPharmacist')
<form action= "{{route('searchItem')}}" class "form-group" method = "GET">
    {{csrf_field()}}
    <table class = "table table-border">
        
        <div class="form-group p-1" >
            <label for="searched_users" ></label>
            <input type="search" name="searched_users">
            <div class="form-group p-1">
                <span>
                    <input type="submit" name="Search" value = "Search" class="btn btn-info">
                </span>
            </div>
        </div>
<table class = "table table-border">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        @foreach($user as $searched_users)
        <tr>
            <td>{{$searched_users->pharmaceuticalItemID}}</td>
            <td>{{$searched_users->itemName}}</td>
            <td>{{$searched_users->price}}</td>
            <td><a href="/editItem/{{$searched_users->name}}">Edit</a></td>
            <td><a href="/deleteItem/{{$searched_users->name}}">Delete</a></td>
        </tr>

        @endforeach
@endsection