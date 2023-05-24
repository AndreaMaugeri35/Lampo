let navbar = document.querySelector("#navbar");

// Script Navbar Dinamica

window.addEventListener('scroll', ()=>{

  if(window.scrollY > 0){

      navbar.classList.remove('bg-transparent');
      navbar.classList.add('background-secondaryC');
      navbar.classList.add("navbar-dark");
      navbar.classList.remove("navbar-light");

  } else {

      navbar.classList.remove('background-secondaryC');
      navbar.classList.add('bg-transparent');
      navbar.classList.remove("navbar-dark");
      navbar.classList.add("navbar-light");

  }
})

// Fine script Navbar Dinamica

// Sezione evento Toggle Mobile

let navbar_toggler = document.querySelector('#bottone');

navbar_toggler.addEventListener('click', ()=>{

  navbar.classList.toggle('background-secondaryC2');


})

// Fine sezione evento Toggle Mobile

