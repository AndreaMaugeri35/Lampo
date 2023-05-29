<x-layout title="Tutti gli annunci" header="{{__('ui.allAnnouncements')}}">

    <div class="container my-2">
        <div class="row justify-content-center">
          
            
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-3 my-5">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                      <h5 class="card-title">{{$announcement->title}}</h5>
                      <p class="card-text">{{$announcement->price}} €</p>
                      <a href="{{route('announcement.show',compact('announcement'))}}" class="btn">{{__('ui.indexDetails')}}</a>
                      <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class=" my-1 btn btn-primary btnCategory text-white">{{__('ui.indexCategory')}} {{$announcement->category->name}}</a>
                      <p class="card-footer">{{__('ui.indexDate')}} {{$announcement->created_at->format('d/m/Y')}} - Da: <a class="btn" href="{{route('announcement.profile',compact('announcement'))}}">{{$announcement->user->name ?? ''}}</a> </p>
                    </div>
                  </div>
                </div>
            @empty
                <div class="col-12 my-5 d-flex flex-column align-items-center ">
                    <h2 class="text-center text-white display-3 fw-bold">{{__('ui.noAnnouncementWelcome')}}</h2>
                </div>
            @endforelse
            <div class="col-12 my-5 d-flex flex-column align-items-center ">      
                    {{$announcements->links()}}
                    <a href="{{route('announcement.create')}}" class="btn btnCategory text-white my-5">{{__('ui.indexPublish')}}</a>
                </div>
            </div>
        </div>
    </div>
    
    </x-layout>