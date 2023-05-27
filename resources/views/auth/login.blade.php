
<x-layout title="Login" header="Bentornato!">

    <div class="container p-5 my-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 my-5 d-flex justify-content-center">
            <form class="p-5 glass text-white text-center" action="{{route('login')}}" method="POST">
                <h2 class="display-3 mb-5">Accedi</h2>

                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                         <p>Email o Password errate!</p>
                           
                        
                    </div>
                @endif

                <div class="mb-3">
                  <label for="email" class="form-label">Indirizzo Email</label>
                  <input type="email" name="email" class="form-control w-100" id="email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control w-100" id="password">
                </div>
                <div class="mb-3 form-check text-start">
                    <label class="form-check-label"  for="remember">Ricordami</label>
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                </div>
                <button type="submit" class="btn btnCategory">Accedi</button>
                <p class="mt-3">Non sei ancora registrato?</p> 
                <a class="btn btnCategory mt-1" href="{{route('register')}}">Registrati</a>
              </form>
            </div>
        </div>
    </div>

</x-layout>
