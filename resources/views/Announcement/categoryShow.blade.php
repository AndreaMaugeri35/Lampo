<x-layout title="{{$category->name}}" header="Annunci filtrati per catregoria :  {{$category->name}}">

    <div class="container my-2">
        <div class="row justify-content-center">
            
                @forelse ($category->announcements->where('is_accepted', true)->sortByDesc('created_at') as $announcement)
                    <div class="col-12 col-md-3 my-5">
                        <div class="card">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            
                            <div class="card-body">
                              <h5 class="card-title">{{$announcement->title}}</h5>
                              <p class="card-title fw-bold">{{$announcement->category->name}}</p>
                              <p class="card-text">{{$announcement->price}} €</p>
                              <a href="{{route('announcement.show',compact('announcement'))}}" class="mb-1 btn btn-primary">Maggiori dettagli</a>
                              <p class="card-footer">Pubblicato il :{{$announcement->created_at->format('d/m/Y')}} - Da: <a class="btn"  href="{{route('announcement.profile',compact('announcement'))}}">{{$announcement->user->name ?? ''}}</a> </p>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-12 d-flex flex-column my-5 align-items-center">
                            <h2 class="text-center text-white display-3 fw-bold">Non ci sono annunci</h2>
                            <a href="{{route('announcement.create')}}" class="btn btnCategory text-white my-5">Pubblicane uno</a>
                        </div>
                    @endforelse

            
        </div>
    </div>

</x-layout>