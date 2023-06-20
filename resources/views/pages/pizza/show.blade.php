@extends('layout.app')
@section('content')
<div class="container d-flex justify-content-center mt-5">
<a class="text-decoration-none" href="{{route ('pizza.index')}}"><i class="fa-solid fa-arrow-left"></i></a>

    <div class="card col-3 ">
       

        <img src="https://images.unsplash.com/photo-1598023696416-0193a0bcd302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1236&q=80" class="card-img-top" alt="...">

        <div class="card-body p-3">
            <p class="card-text"><strong>Pizza:</strong> {{ $pizza->name }}</p>
            <p class="card-text"><strong>Descrizione:</strong> {{ $pizza->description }}</p>
            <p class="card-text"><strong>Prezzo:</strong> {{ $pizza->price }} &euro;</p>
            <p class="card-text"><strong>Calorie:</strong> {{ $pizza->calories }} Kcal</p>
            <p class="card-text"><strong>Vegana:</strong>
                @if ($pizza->vegan == 0)
                No 
            @else 
                Yes
            @endif
            </p>
            <p class="card-text"><strong>Disponibile:</strong>
                @if ($pizza->available == 0)
                No 
            @else 
                Yes
            @endif
            </p>

        </div>

    
    </div>
</div>
@endsection