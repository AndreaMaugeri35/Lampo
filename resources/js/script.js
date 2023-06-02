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

// var swiper = new Swiper(".mySwiper", {
//   spaceBetween: 30,
//   centeredSlides: true,
//   loop: true,
//   autoplay: {
//     delay: 2500,
//     disableOnInteraction: false,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });





// carosello di prova



    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });


    let category1 = document.querySelector('#category1');
    let category2 = document.querySelector('#category2');
    let category3 = document.querySelector('#category3');
    let category4 = document.querySelector('#category4');
    let category5 = document.querySelector('#category5');
    let category6 = document.querySelector('#category6');
    let category7 = document.querySelector('#category7');
    let category8 = document.querySelector('#category8');
    let category9 = document.querySelector('#category9');
    let category10 = document.querySelector('#category10');

    let i1 = document.querySelector('#i1');
    let i2 = document.querySelector('#i2');
    let i3 = document.querySelector('#i3');
    let i4 = document.querySelector('#i4');
    let i5 = document.querySelector('#i5');
    let i6 = document.querySelector('#i6');
    let i7 = document.querySelector('#i7');
    let i8 = document.querySelector('#i8');
    let i9 = document.querySelector('#i9');
    let i10 = document.querySelector('#i10');



    if(category1.classList.contains('category1')){
      i1.classList.add('fa-solid' ,'fa-tv', 'fa-7x');
    }
    if(category2.classList.contains('category2')){
      i2.classList.add('fa-solid' ,'fa-gears', 'fa-7x');
    }if(category3.classList.contains('category3')){
      i3.classList.add('fa-solid' ,'fa-mobile-screen', 'fa-7x');
    }
    if(category4.classList.contains('category4')){
      i4.classList.add('fa-solid' ,'fa-sliders', 'fa-7x');
    }
    if(category5.classList.contains('category5')){
      i5.classList.add('fa-solid' ,'fa-laptop', 'fa-7x');
    }if(category6.classList.contains('category6')){
      i6.classList.add('fa-solid' ,'fa-film', 'fa-7x');
    }
    if(category7.classList.contains('category7')){
      i7.classList.add('fa-solid' ,'fa-gamepad', 'fa-7x');
    }
    if(category8.classList.contains('category8')){
      i8.classList.add('fa-solid' ,'fa-camera-retro', 'fa-7x');
    }if(category9.classList.contains('category9')){
      i9.classList.add('fa-solid' ,'fa-music', 'fa-7x');
    }
    if(category10.classList.contains('category10')){
      i10.classList.add('fa-solid' ,'fa-keyboard', 'fa-7x');
    }

