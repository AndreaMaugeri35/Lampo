<x-layout title="Vendilo.it" header="">

    <div class="container-fluid my-2">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center h-100">
                <div class="d-flex align-items-center justify-content-center flex-column text-white">
                    
                    <h1 class="">LA<span id="M">M</span><span class="d-none" id="Icon"><i class="fa-solid fa-bolt"></i></span>PO</h1>
                    <h2>prova titoletto</h2>
                    <button id="btn" class="btn btnCategory">button</button>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center h-100"><img class="img-fluid" src="/media/cover1.png" alt=""></div>
        </div>
  </div>




    <div class="container my-2">
        <div class="row justify-content-center">
            @if (session('access_denied'))
                <div class="alert alert-danger text-center">
                    {{ session('access_denied') }}
                </div>
            @endif
                
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-3 my-5">
                    <div class="card">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->price }} €</p>
                            <a href="{{ route('announcement.show', compact('announcement')) }}"
                                class="btn btn-primary">Maggiori dettagli</a>
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class="my-1 btn btn-primary btnCategory">Categoria:
                                {{ $announcement->category->name }}</a>
                            <p class="card-footer">Pubblicato il :{{ $announcement->created_at->format('d/m/Y') }} - Da:
                                <a class="btn btnprimaryC " href="{{ route('announcement.profile', compact('announcement')) }}">{{ $announcement->user->name ?? '' }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 my-5 d-flex flex-column align-items-center">
                    <h2 class="text-center text-primaryC display-3 fw-bold">Non ci sono annunci</h2>
                </div>
            @endforelse
            <div class="col-12 my-5 d-flex flex-column align-items-center">
                <a href="{{ route('announcement.create') }}" class="btn btnCategory text-white my-5">Pubblica un nuovo annuncio</a>
            </div>
        </div>
    </div>
    </div>

</x-layout>
