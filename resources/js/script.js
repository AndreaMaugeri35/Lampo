let prevScrollpos = window.pageYOffset;
let navbar = document.querySelector("#navbar");

window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;

  if (prevScrollpos < currentScrollPos) {
    // Scrolling verso il basso
    navbar.classList.add("navbar-hidden");
  } else {
    // Scrolling verso l'alto o in cima alla pagina
    navbar.classList.remove("navbar-hidden");
  }

  prevScrollpos = currentScrollPos;
  if (window.pageYOffset == 0){
    navbar.classList.add("bg-transparent");
    navbar.classList.remove("background-secondaryC");
    navbar.classList.add("navbar-light");
    navbar.classList.remove("navbar-dark");


  
  } else{
    navbar.classList.remove("bg-transparent");
    navbar.classList.add("background-secondaryC");
    navbar.classList.remove("navbar-light");
    navbar.classList.add("navbar-dark");
  }
}