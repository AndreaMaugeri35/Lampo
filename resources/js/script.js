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

let navbar_toggler = document.querySelector('#bottone');


navbar_toggler.addEventListener('click', ()=>{


    navbar.classList.remove('bg-transparent');

})





// Fine sezione evento Toggle Mobile
