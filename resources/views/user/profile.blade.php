<x-layout title="Il tuo profilo: {{Auth::user()->name}}" header="Benvenuto nella tua area personale, {{Auth::user()->name}}">
    @if (session()->has('message'))
       <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
     @endif
    
    <div class="container my-5">
        <div class="row justify-content-center">
                <h2 class="text-white text-center">Annunci pubblicati</h2>
                @forelse (Auth::user()->announcements->where('is_accepted', true) as $announcement)
                <div class="col-12 col-md-3 my-5">
                    <div class="card">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                          <h5 class="card-title">{{$announcement->title}}</h5>
                          <p class="card-text">{{$announcement->price}} €</p>
                          <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary">Maggiori dettagli</a>
                          <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-1 btn btn-primary btnCategory">Categoria: {{$announcement->category->name}}</a>
                          <p class="card-footer">Pubblicato il :{{$announcement->created_at->format('d/m/Y')}}</p>
                          
                                        
                                        <form action="{{ROUTE('announcement.destroy',compact('announcement'))}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn">Cancella</button>
                                        </form>
                                    
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12 my-5 d-flex flex-column align-items-center">
                        <h2 class="text-center text-white display-3 fw-bold">Nessun annuncio pubblicato</h2>
                    </div>
                @endforelse
                    <div class="col-12 my-5 d-flex flex-column align-items-center">               
                        <a href="{{route('announcement.create')}}" class="btn btnCategory text-white my-5">Pubblica un nuovo annuncio</a>
                    </div> 
                    <h2 class="text-white text-center">Annunci rifiutati o in attesa di revisione</h2>
                    @forelse (Auth::user()->announcements->where('is_accepted',!1) as $announcement)
                    <div class="col-12 col-md-3 my-5">
                        <div class="card">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            
                            <div class="card-body">
                              <h5 class="card-title">{{$announcement->title}}</h5>
                              <p class="card-text">{{$announcement->price}} €</p>
                              <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-1 btn btn-primary btnCategory">Categoria: {{$announcement->category->name}}</a>
                              <p class="card-footer">@if (is_numeric($announcement->is_accepted))Rifiutato @else In attesa di revisione @endif </p>
                              <form action="{{ROUTE('announcement.destroy',compact('announcement'))}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn">Cancella</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-12 my-5 d-flex flex-column align-items-center">
                            <h2 class="text-center text-white display-3 fw-bold">Nessun annuncio rifiutato o in attesa di revisione</h2>
                        </div>
                    @endforelse    
                    
        </div>
    </div>
</x-layout>