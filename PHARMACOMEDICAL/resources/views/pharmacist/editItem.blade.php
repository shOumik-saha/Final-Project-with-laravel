@extends('layouts.appPharmacist')
@section('contentPharmacist')
    <div class = "container">
    <br><br>
     <h1>Edit Item</h1>
     <form action= "{{route('editItem')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="itemName">itemName</label>
            <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter itemName" value="{{$item->itemName}}">
            @error('itemName')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="price" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$item->price}}">
            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
            
        <div class="form-group p-1">
            <span>
                <input type="submit" name="update" value="Update" class="btn btn-info">
            </span>
        </div>
    </form>
    </div>
@endsection