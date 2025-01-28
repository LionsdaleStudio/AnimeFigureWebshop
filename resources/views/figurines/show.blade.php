@extends('layouts.app')

@section('content')
    <div class="card col-4">
        <img src="{{asset("storage/placeholder.png")}}" class="img-fluid rounded-top" alt="" />

        <p>
            This is the show page.
        </p>
        <p>Details of {{ $figure->name }}:</p>
        <p>
            {{ $figure->description }}
        </p>
    </div>
@endsection
