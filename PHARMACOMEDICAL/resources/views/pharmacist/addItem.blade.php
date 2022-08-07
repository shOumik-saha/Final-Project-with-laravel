@extends('layouts.appPharmacist')
@section('contentPharmacist')
<head>
    <title></title>
     <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
</head>
<body>        

    <div class="container">

          

<form action="{{route('addItem')}}" class="form-group" method="POST" align="center">
    {{csrf_field()}}

    
        <h1>Add Item</h1>
        <center>
    <div class="col-md-9 form-group">
        <span class="id">itemName</span>
        <input type="text" name="itemName" class="form-control" placeholder="Enter your itemName">
        @error('itemName')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">price</span>
        <input type="text" name="price" class="form-control" placeholder="Enter price">
        @error('price')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</cemter>
    <div class="p">
    <div class="d-grid col-12 mx-auto">
            <input type="submit" class="btn btn-primary" value="Add" >
    </div>
</div>

</form>


</div>

    
</body>
</html>
@endsection