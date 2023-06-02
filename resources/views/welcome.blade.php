<x-layout title="LAMPO.it" header="">

    @if (session()->has('message'))
         <div class="alert alert-success text-center">
              {{session('message')}}
         </div>
    @endif

    <div class="container-fluid mt-2 mb-5 seitu pb-5">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center h-100">
                <div data-aos="fade-right" class="d-flex align-items-center justify-content-center flex-column text-white">
                    <i class="fa-solid text-accentC fa-10x my-5"></i>
                    <h1 class="display-1 mt-5 glow1">LAMPO<span class="text-accentC">.it</span></h1>
                    <h2 class="mb-5">{{__('ui.subtitle')}} <span> <img src="/media/logo.png" class="logo2 pb-2" alt=""></span></h2>
                    <a href="{{route('announcement.create')}}" class="btn btnCategory text-white my-5">{{__('ui.createWelcome')}}</a>
                </div>
            </div>
            <div data-aos="fade-left" class="col-12 col-md-6 d-flex align-items-center justify-content-center"><img class="img-fluid pngheader" src="/media/header4.png" alt=""></div>
        </div>
  </div>

  {{-- Sezione icone con categorie --}}

  <div class="container my-5 categories">
    <div class="row  justify-content-evenly h-100">
        @foreach($categories as $category)

        <div class="col-md-2 col-5 d-flex flex-column justify-content-center align-items-center  mx-1 mb-5">
            
            <a class="w-100 h-100 text-center" href="{{route('categoryShow',compact('category'))}}">
                <div id="category{{$category->id}}" class="category{{$category->id}}"class="p-5"><i id="i{{$category->id}}" class=" text-gradient  "></i></div></a>
            <h2 class="pb-2 glow2  ">{{__('ui.categories'. $category->id)}}</h2>
            
        </div>
        @endforeach
    </div>
  </div>
</div>

{{-- inizio carosello --}}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 minh "> 


            <div class="swiper mySwiper  h-100">
                <div class="swiper-wrapper h-100 ">
                @forelse ($announcements as $announcement)
                <a href="{{route('announcement.show',compact('announcement'))}}">
                <div class="swiper-slide lui ">
                    <img  src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrlwater('logo') : 'https://picsum.photos/200'}}" alt="" class=" lei">
                    <div class="d-flex flex-column text-center">
                        <h5 class="text-white display-4">{{$announcement->title}}</h5>
                          <p class="text-white">{{$announcement->price}} €</p> </a>
                  </div>
                </div>
                @empty
            </div>
                    
                @endforelse
                <div class="swiper-pagination"></div>
              </div>
        </div>

    </div>

</div>
   

</x-layout>
