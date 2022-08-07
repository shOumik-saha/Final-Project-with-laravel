@extends('layouts.appPharmacist')
@section('contentPharmacist')
<center>
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/pharmacist/create') }}" class="btn btn-success btn-sm" title="Add New item">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>  Action</th>
                            </tr>
                        </thead>
                                <tbody>
                                @foreach($pharmaceuticalitems as $pharmaceuticalitems)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pharmaceuticalitems->itemName }}</td>
                                <td>{{ $pharmaceuticalitems->price }}</td>
                                        <td>
                                            <a href="{{ url('/pharmacist/' . $pharmaceuticalitems->userID) }}" title="View item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/pharmacist/' . $pharmaceuticalitems->userID . '/editItem') }}" title="Edit item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/pharmacist' . '/' . $pharmaceuticalitems->userID) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection