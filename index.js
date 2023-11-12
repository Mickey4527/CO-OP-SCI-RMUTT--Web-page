function search(){
	document.getElementById("search").style.top = "0";
}

function closesearch(){
	document.getElementById("search").style.top = "-80px";
}

function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
  }
}
function headerNavbar(){
  const header = document.getElementById("header-navbar");

  let scrollPos = window.scrollY;
  // change color of navbar on scroll
  if (scrollPos > 50) {
    header.classList.add('sticky-navbar');
  
  } else {
    header.classList.remove('sticky-navbar');
  }
}

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener('scroll', headerNavbar);
});
window.addEventListener("scroll", reveal);


// To check the scroll position on page load

reveal();