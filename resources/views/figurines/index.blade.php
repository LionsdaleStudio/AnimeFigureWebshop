@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Anime Figurine List</h1>
    </div>

    @if (session('success'))
        <div class="row">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{ session('success') }}</h4>
                <hr />
            </div>
        </div>
    @endif

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
                    @foreach ($figurines as $figure)
                        <tr class="">
                            <td scope="row">{{ $figure->name }}</td>
                            <td>{{ $figure->price }}</td>
                            <td>{{ $figure->quantity }}</td>
                            <td><input type="checkbox" disabled @if ($figure->limited == 1) checked @endif></td>
                            <td>
                                <form action="{{ route('figures.show', $figure) }}" method="GET">
                                    <button class="btn btn-info">Show</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('figures.edit', $figure) }}" method="GET"><button
                                        class="btn btn-warning">Edit</button></form>
                            </td>
                            <td>
                                <form action="{{ route('figures.destroy', $figure) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
