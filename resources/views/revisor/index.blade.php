<x-layout title="revisor">
    <div class="div container-fluid p-5 bg-gradient bg-success-p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class=" display-2">
                    {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono Annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
    {{-- @forelse ($announcement_to_check as $announcement) --}}
        <div class="col-12 col-md-4 my-5">
            <div class="card">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                
                <div class="card-body">
                  <h5 class="card-title">{{$announcement_to_check->title}}</h5>
                  <p class="card-text">{{$announcement_to_check->price}} €</p>
                  <p class="card-text">{{$announcement_to_check->body}}</p>
                  <p class="card-text">{{$announcement_to_check->category->name}}</p>
                </div>
              </div>
            </div>
        
                <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success">Accetta</button>
                </form>

                <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger my-2">Rifiuta</button>
                </form>
            </div>

        </div>
    </div>
    @endif
</x-layout>