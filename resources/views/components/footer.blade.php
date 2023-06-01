<!-- Footer -->
<footer class=" text-center text-white bg-transparent">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="text-white btn-floating m-1"  href="https://www.facebook.com/" target="blank" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="text-white btn-floating m-1"  href="https://twitter.com/" target="blank" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Instagram -->
      <a class="text-white btn-floating m-1"  href="https://www.instagram.com/" target="blank" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="text-white btn-floating m-1"  href="https://www.linkedin.com/" target="blank" role="button"><i class="fab fa-linkedin-in"></i></a>
      <!-- Github -->
      <a class="text-white btn-floating m-1"  href="https://www.github.com/" target="blank" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->

    <section class="mb-2">
      <!-- Facebook -->
      <img src="/media/logo.png" class="logo2 pb-2" alt="">

      <a class="text-white btn btnCategory" href="{{ route('about')}}">{{__('ui.about')}}</a>

    </section>


  </div>
  
  
  
      <!-- Section: Text -->
      @auth
        @if (!Auth::user()->is_revisor)
          <section class="mb-4">
            <p>{{__('ui.work')}}: 
              <a class="btn btnCategory text-white" href="{{ route('become.revisor') }}">{{__('ui.becomeRevisor')}}</a>
            </p>
          </section>
        @endif 
      @endauth 
          
     
      <!-- Section: Text -->
  
  
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3">
      © 2023 Copyright:
      <a class="text-accentC" href="{{route('homepage')}}">LAMPO.it</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->