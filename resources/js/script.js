let navbar = document.querySelector("#navbar");




// Script Navbar Dinamica

window.addEventListener('scroll', ()=>{

  if(window.scrollY > 0){

      navbar.classList.remove('bg-transparent');
      navbar.classList.add('background-blackC');
      

  } else {

      navbar.classList.remove('background-blackC');
      navbar.classList.add('bg-transparent');
    
  }
})


// Fine script Navbar Dinamica

// Sezione evento Toggle Mobile

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



