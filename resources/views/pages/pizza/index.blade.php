@extends( 'layout.app' )

@section('titlePage')
 Home
@endsection

@section( 'content' )

<h1 class="text-center text-uppercase fs-1 fw-bolder text-light mt-4">PIZZA</h1>



<div class="maincore col-8 m-auto d-flex flex-wrap gap-4 h-100 p-4 bg-dark justify-content-center">

    @foreach ($pizza as $item)
    <div class="card col-3 ">
        <a class="text-decoration-none" href="{{route ('pizza.show',['pizza'=>$item->id])}}">

            <img src="https://images.unsplash.com/photo-1598023696416-0193a0bcd302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1236&q=80" class="card-img-top" alt="...">

            <div class="card-body p-3">
                <p class="card-text"><strong>Pizza:</strong> {{ $item->name }}</p>
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
        </a>

        <button type="button" class="btn btn-danger bg-danger-subtle text-danger mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$item->id}}">
            <i class="fa-regular fa-trash-can text-danger"></i>
        </button>

          <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to delete the pizza?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container d-flex text-center justify-content-center mt-3 mb-3">
                    <i class="fa-solid fa-triangle-exclamation text-danger fs-3"></i>
                  </div>
                  After deletion, it will no longer be possible to recover the pizza.
                </div>

                <div class="modal-footer justify-content-start">
                  <form action="{{ route('pizza.destroy', $item) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger bg-danger-subtle text-danger me-2">
                      <i class="fa-regular fa-trash-can text-danger me-2"></i>
                      Delete
                    </button>

                  </form>
                  <button type="button" class="btn btn-secondary bg-secondary-subtle text-secondary me-2" data-bs-toggle="modal" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark text-secondary me-2"></i>
                    Cancel
                  </button>
                </div>
                
              </div>
            </div>
        </div>
    </div>

@endforeach


</div>

<div class="d-flex justify-content-center mt-3 mb-5 ">
    <button class="text-uppercase btn btn-primary"><a class="text-uppercase text-white text-decoration-none" href="{{ route('pizza.create') }}"> create pizza </a> </button>
</div>
@endsection