var prevScrollpos = window.pageYOffset;
var navbar = document.getElementById("navbar");

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos < currentScrollPos) {
    // Scrolling verso il basso
    navbar.classList.add("navbar-hidden");
  } else {
    // Scrolling verso l'alto o in cima alla pagina
    navbar.classList.remove("navbar-hidden");
  }

  prevScrollpos = currentScrollPos;
};