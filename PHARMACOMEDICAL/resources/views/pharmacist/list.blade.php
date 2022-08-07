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
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        @foreach($user as $user)
        <tr>
            <td>{{$user->pharmaceuticalItemID}}</td>
            <td>{{$user->itemName}}</td>
            <td>{{$user->price}}</td>
            <td><a href="/editItem/{{$user->itemName}}">Edit</a></td>
            <td><a href="/deleteItem/{{$user->itemName}}">Delete</a></td>
        </tr>
        @endforeach
@endsection