@extends('layouts.app')

@section('content')
    <div>
        <p>
            This is the show page.
        </p>
        <p>Details of {{$figure->name}}:</p>
        <p>
            {{$figure->description}}
        </p>
    </div>
@endsection
