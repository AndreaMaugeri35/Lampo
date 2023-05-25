
<x-layout title="Login" header="Bentornato">

    <div class="container p-5 my-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-5">
            <form class="p-5 bg-white" action="{{route('login')}}" method="POST">
                <h2 class="display-3">Accedi</h2>

                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                  <label for="email" class="form-label">Indirizzo Email</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label"  for="remember">Ricordami</label>
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                </div>
                <button type="submit" class="btn btnCategory">Accedi</button>
                <p class="mt-2">Non sei ancora registrato? Fai la <a href="{{route('register')}}">Registrati</a></p> 
              </form>
            </div>
        </div>
    </div>

</x-layout>
