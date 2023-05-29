<x-layout title="Revisiona annunci" header="Qualcosa da revisionare?">
    @if (session()->has('message'))
       <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
     @endif
    <div class="div container p-5 mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class=" display-2 text-center text-white">
                    {{$announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono Annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
    {{-- @forelse ($announcement_to_check as $announcement) --}}
        <div class="col-12 col-md-6 my-3">
            <div class="card">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                
                <div class="card-body">
                  <h5 class="card-title">{{$announcement_to_check->title}}</h5>
                  <p class="card-text">{{$announcement_to_check->price}} €</p>
                  <p class="card-text">{{$announcement_to_check->body}}</p>
                  <p class="card-text">{{$announcement_to_check->category->name}}</p>
                  <p class="card-text">Creato da <a class="btn" href="{{route('announcement.profile',compact('announcement'))}}">{{$announcement_to_check->user->name}}</a></p>
                </div>
            </div>
            
        </div>

            <div class="col-12 col-md-6 my-3 p-5 d-flex">
                <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success">Accetta</button>
                </form>

                <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger mx-5">Rifiuta</button>
                </form>
            </div>

        </div>
    </div>
    @endif

    @if (App\Models\Announcement::toBeRevisionedCount() != App\Models\Announcement::all()->count() )
        
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form action="{{ route('revisor.rollbackTransaction') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btnCategory text-white mt-5 mb-5" type="submit">Annulla ultima operazione</button>
                </form>
            </div>
        </div>
    </div>
    @endif


</x-layout>