@extends('layout.app')

@section('content')
    <div class="container d-flex justify-content-center mt-5 flex-column m-auto align-items-center">
        <a class="text-decoration-none mb-4" href="{{ route('pizza.index') }}"><i class="fa-solid fa-arrow-left fs-1"></i></a>

        <div class="card col-3 ">


            <img src="https://images.unsplash.com/photo-1598023696416-0193a0bcd302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1236&q=80"
                class="card-img-top" alt="...">

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

            @if( count($pizza->ingredients) > 0 )
                @foreach ( $pizza->ingredients as $elem )
                    <div> {{ $elem->name }} </div>
                @endforeach 
                @else <p class="p-3">Non ci sono ingredienti specificati</p>
            @endif

            <button class="text-uppercase btn btn-primary"><a class="text-uppercase text-white text-decoration-none"
                    href="{{ route('pizza.edit', $pizza) }}"> edit pizza </a> </button>

        </div>
    </div>
@endsection
