@extends('layout.app')

@section('content')
    <div class="container d-flex justify-content-center mt-5">

        <a class="text-decoration-none" href="{{ route('pizza.index') }}"><i class="fa-solid fa-arrow-left"></i></a>

        <h1 class="text-uppercase text-danger">Edit your own pizza</h1>

        <form action=" {{ route('pizza.update', $pizza) }} " method="POST" class="row">

            @csrf

            @method('PUT')

            <div class="form-group mt-3">
                <label for="input-name" class="form-label text-white">Name:</label>
                <input type="text" id="input-name" class="form-control @error('name') is-invalid @enderror"
                    name="name" placeholder="pizza name" autofocus value="{{ old('name') ?? $pizza->name }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="input-description" class="form-label text-white">Description:</label>
                <textarea id="input-description" class="form-control" name="description" cols="35" rows="3">
                    {{ old('description') ?? $pizza->description }}
        </textarea>
            </div>
            <div class="form-group mt-3 col-6">
                <label for="input-price" class="form-label text-white">Price:</label>
                <input type="text" id="input-price" class="form-control @error('price') is-invalid @enderror"
                    name="price" placeholder="price" value="{{ old('price') ?? $pizza->price }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-3 col-6">
                <label for="input-calories" class="form-label text-white">Calories:</label>
                <input type="text" id="input-calories" class="form-control" name="calories" placeholder="calories"
                    value="{{ old('calories') ?? $pizza->calories }}">
            </div>

             {{-- Checkbox ingredients --}}
             <div class="form-group my-3">
                <div class="text-white">
                    Ingredienti utilizzati:
                </div>
                <div class="d-flex flex-wrap">
                    
                    @foreach ($ingredients as $elem)
                        <div class="me-4">
                            <label for="input-ingredients-{{$elem->id}}" class="form-label text-white">
                                {{$elem->name}}:
                            </label>

                            @if ($errors->any())

                                <input type="checkbox" id="input-ingredients-{{$elem->id}}" value="{{$elem->id}}" name="ingredients[]" {{ in_array( $elem->id, old('ingredients', [] ) ) ? 'checked' : '' }}>
                                
                            @else
                                {{-- nessun errore --}}
                                <input type="checkbox" id="input-ingredients-{{$elem->id}}" value="{{$elem->id}}" name="ingredients[]" {{ $pizza->ingredients->contains($elem) ? 'checked' : '' }}>
                                
                            @endif
                            
                        </div>
                    @endforeach
                </div>
            </div>


            <button type="submit" class="text-uppercase btn btn-primary">Edit</button>
        </form>
    @endsection
