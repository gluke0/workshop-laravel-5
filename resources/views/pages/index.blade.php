@extends( 'layout.app' )

@section('titlePage')
 Home
@endsection

@section( 'content' )

<h1 class="text-center text-uppercase fs-1 fw-bolder text-light mt-4">PIZZA</h1>



<div class="maincore col-8 m-auto d-flex flex-wrap gap-4 h-100 p-4 bg-dark justify-content-center">

    @foreach ($pizza as $item)
    <div class="card col-3 ">
        <img src="https://images.unsplash.com/photo-1598023696416-0193a0bcd302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1236&q=80" class="card-img-top" alt="...">

        <div class="card-body p-3">
            <p class="card-text"><strong>Pizza:</strong> {{ $item->name }}</p>
            <p class="card-text"><strong>Descrizione:</strong> {{ $item->description }}</p>
            <p class="card-text"><strong>Prezzo:</strong> {{ $item->price }} &euro;</p>
            <p class="card-text"><strong>Calorie:</strong> {{ $item->calories }} Kcal</p>
            <p class="card-text"><strong>Vegana:</strong>
                @if ($item->vegan == 0)
                No 
            @else 
                Yes
            @endif
            </p>
            <p class="card-text"><strong>Disponibile:</strong>
                @if ($item->available == 0)
                No 
            @else 
                Yes
            @endif
            </p>

        </div>
    </div>
@endforeach



</div>

@endsection