@extends('layout.app')

@section('content')

<div class="container d-flex justify-content-center mt-5">

<a class="text-decoration-none" href="{{route ('pizza.index')}}"><i class="fa-solid fa-arrow-left fs-1 me-4 mt-3"></i></a>

<h1 class="text-uppercase text-danger mt-3">Make your own pizza</h1>

<form action=" {{ route('pizza.store') }} " method="POST" class="row">

    @csrf

    <div class="form-group mt-3">
        <label for="input-name" class="form-label text-white">Name:</label>
        <input type="text" id="input-name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="pizza name" autofocus>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="input-description" class="form-label text-white">Description:</label>
        <textarea id="input-description" class="form-control" name="description" cols="35" rows="3">
        </textarea>
    </div>
    <div class="form-group mt-3 col-6">
        <label for="input-price" class="form-label text-white">Price:</label>
        <input type="text" id="input-price" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mt-3 col-6">
        <label for="input-calories" class="form-label text-white">Calories:</label>
        <input type="text" id="input-calories" class="form-control" name="calories" placeholder="calories"> 
    </div>
    <div class="form-group mt-3 col-6">
        <label for="input-vegan" class="form-label text-white">Vegan:</label>
        <input type="checkbox" id="input-vegan" class="" name="vegan" placeholder="type">
    </div>
    <div class="form-group mt-3 col-6">
        <label for="input-available" class="form-label text-white">Available:</label>
        <input type="checkbox" id="input-available" class="" name="available" placeholder="type">
    </div>
    <div class="form-group mt-3 col-6">
        @foreach ($ingredients as $elem)
            <div>
                <label for="input-ingredients-{{ $elem->id }}" class="form-label text-white">{{ $elem->name }}</label>
                <input type="checkbox" id="input-ingredients-{{ $elem->id }}" value="{{ $elem->id }}" class="" name="ingredients[]" placeholder="type" {{ in_array( $elem->id, old('ingredients', [] ) ) ? 'checked' : '' }}> 
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary btn-outline-light my-4 col-2 mx-auto text-uppercase"><strong> create </strong></button>
</form>



@endsection