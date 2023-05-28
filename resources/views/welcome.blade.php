<x-layout title="LAMPO.it" header="">

    <div class="container-fluid mt-2 seitu pb-5">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center h-100">
                <div class="d-flex align-items-center justify-content-center flex-column text-white">
                    <i class="fa-solid text-accentC fa-10x my-5"></i>
                    <h1 class="display-1 mt-5 glow1">LAMPO<span class="text-accentC">.it</span></h1>
                    <h2 class="mb-5">Non lo usi? Vendilo in un <span class="fa-sharp fa-solid fa-bolt-lightning text-accentC"></span>!</h2>
                    <button id="btn" class="btn btnCategory">Pubblica annuncio</button>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center"><img class="img-fluid pngheader" src="/media/header3.png" alt=""></div>
        </div>
  </div>

  <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($announcements as $announcement)
                        <div class="swiper-slide position-relative flex-column d-flex align-items-center">
                            <img class="w-100 mySwiper1" src="https://picsum.photos/300/200" alt="">
                            <div class="w-100 position-absolute d-flex flex-column justify-content-end h-100 align-items-center">
                                <a href="{{route('announcement.show',compact('announcement'))}}" class="h-100 w-100"></a>
                            </div>
                            <div class="d-flex flex-column text-center">
                                  <h5 class="text-white display-4">{{$announcement->title}}</h5>
                                    <p class="text-white">{{$announcement->price}} €</p> 
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>




    {{-- <div class="container my-2">
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
    </div> --}}

</x-layout>
