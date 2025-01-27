@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add new Figurine</h4>
                <p class="card-text">Fields marked with * are mandatory!</p>

                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ol>

                <form action="{{route("figurines.store")}}" method="POST">
                    @csrf
                    <input type="text" class="form-control mb-3" placeholder="Név" name="name" @error("name") style="border-color: red"; @enderror>
                    @error("name") {{$message}} @enderror
                    <input type="number" class="form-control mb-3" placeholder="Ár" name="price" step="0.01">
                    <input type="text" class="form-control mb-3" placeholder="Leírás" name="description">
                    <input type="text" class="form-control mb-3" placeholder="Származás" name="origin">
                    <label for="limited">Limitált kiadás?</label>
                    <input type="checkbox" class="form-check-input mb-3" name="limited" value="1">
                    <input type="number" class="form-control mb-3" placeholder="Mennyiség" name="quantity">

                    <div class="text-center">
                        <button class="btn btn-outline-success">Hozzáadás</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection