<x-layout title="Profilo di {{$announcement->user->name}}" header="Ecco gli annunci di {{$announcement->user->name}}">
    <div class="container my-2">
        <div class="row justify-content-center">
          
            
            @forelse ($announcement->user->announcements->where('is_accepted', true) as $announcement)
            <div class="col-12 col-md-3 my-5">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <p class="card-text">{{$announcement->price}} €</p>
                      <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Maggiori dettagli</a>
                      <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-1 btn btn-primary btnCategory text-white">Categoria: {{$announcement->category->name}}</a>
                      <p class="card-footer">Pubblicato il :{{$announcement->created_at->format('d/m/Y')}} - Da:{{$announcement->user->name ?? ''}}</a> </p>
                    </div>
                  </div>
                </div>
            @empty
                <div class="col-12 my-5 d-flex flex-column align-items-center">
                    <h2 class="text-center text-white display-3 fw-bold">Non ci sono annunci</h2>
                </div>
            @endforelse
                <div class="col-12 my-5 d-flex flex-column align-items-center">               
                    <a href="{{route('announcement.create')}}" class="btn btnCategory text-white my-5">Pubblica un nuovo annuncio</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>