<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            @auth
            <a href="{{route('announcement.create')}}" class="btn btn-primary">inserisci un annuncio</a>
            @endauth
        </div>
    </div>
</div>

</x-layout>