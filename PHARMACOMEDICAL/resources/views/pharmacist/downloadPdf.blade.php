@extends('layouts.appPharmacist')
@section('contentPharmacist')
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
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
    <body>
        <br>
        <br>
        <form>
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

</form>
<div class="d-flex justify-content-center">
    <span>
        <a href="javascript:window.print()" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
    </span>
</div>
</body>
</html>
@endsection