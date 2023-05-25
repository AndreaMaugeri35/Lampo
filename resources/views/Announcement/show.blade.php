<x-layout title="{{$announcement->title}}">
    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mt-5">
                <div class="card">
                    {{-- <img src="https://picsum.photos/200" class="card-img-top" alt="..."> --}}
                    
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>




                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <p class="card-title fw-bold">{{$announcement->category->name}}</p>
                      <p class="card-text">{{$announcement->body}}</p>
                      <p class="card-text">{{$announcement->price}} €</p>
                      <p class="card-text">Pubblicato il :{{$announcement->created_at->format('d/m/Y')}} - Da: <a href="{{route('announcement.profile',compact('announcement'))}}">{{$announcement->user->name ?? ''}}</a> </p>
                      <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-1 btn btn-primary btnCategory text-white">Categoria: {{$announcement->category->name}}</a>
                      <a href="{{route('homepage')}}" class="btn btn-primary text-white">Torna alla home</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>