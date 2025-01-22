@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Anime Figurine List</h1>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-secondary table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Limited</th>
                        <th scope="col" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($figurines as $item)
                        <tr class="">
                            <td scope="row">{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td><input type="checkbox" disabled @if($item->limited == 1) checked @endif></td>
                            <td><form action="" method="POST"><button class="btn btn-info">Show</button></form></td>
                            <td><form action="" method="POST"><button class="btn btn-warning">Edit</button></form></td>
                            <td><form action="" method="POST"><button class="btn btn-danger">Delete</button></form></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
