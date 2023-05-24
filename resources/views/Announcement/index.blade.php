<x-layout title="Tutti gli annunci">

    <div class="container my-2">
        <div class="row justify-content-center">
          
            
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-3 my-5">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <p class="card-text">{{$announcement->price}} €</p>
                      <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Maggiori dettagli</a>
                      <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class=" my-1 btn btn-primary btnCategory">Categoria: {{$announcement->category->name}}</a>
                      <p class="card-footer">Pubblicato il :{{$announcement->created_at->format('d/m/Y')}} - Da: <a href="{{route('announcement.profile',compact('announcement'))}}">{{$announcement->user->name ?? ''}}</a> </p>
                    </div>
                  </div>
                </div>
            @empty
                <div class="col-12 my-5 d-flex flex-column align-items-center ">
                    <h2 class="text-center text-primaryC display-3 fw-bold">Non ci sono annunci</h2>
                </div>
            @endforelse
            <div class="col-12 my-5 d-flex flex-column align-items-center ">      
                    {{$announcements->links()}}
                    <a href="{{route('announcement.create')}}" class="btn btn-primary my-5">Pubblica un nuovo annuncio</a>
                </div>
            </div>
        </div>
    </div>
    
    </x-layout>