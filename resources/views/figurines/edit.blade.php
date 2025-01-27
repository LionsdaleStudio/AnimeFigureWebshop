@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Figure named {{$figure->name}}</h4>
                <p class="card-text">Fields marked with * are mandatory!</p>

                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ol>

                <form action="{{route("figures.update", $figure)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input value="{{old('name', $figure->name)}}" type="text" class="form-control mb-3" placeholder="Név" name="name" @error("name") style="border-color: red"; @enderror>
                    @error("name") {{$message}} @enderror
                    <input value="{{old('price', $figure->price)}}" type="number" class="form-control mb-3" placeholder="Ár" name="price" step="0.01">
                    <input value="{{$figure->description}}" type="text" class="form-control mb-3" placeholder="Leírás" name="description">
                    <input value="{{$figure->origin}}" type="text" class="form-control mb-3" placeholder="Származás" name="origin">
                    <label for="limited">Limitált kiadás?</label>
                    <input value="{{$figure->limited}}" type="checkbox" class="form-check-input mb-3" name="limited" @if ($figure->limited == true) checked @endif>
                    <input value="{{$figure->quantity}}" type="number" class="form-control mb-3" placeholder="Mennyiség" name="quantity">

                    <div class="text-center">
                        <button class="btn btn-outline-warning">Frissítés</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

