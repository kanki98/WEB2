let slideIndex = 1;
document.addEventListener("DOMContentLoaded", function () {
  showSlides(slideIndex);
});


function plusSlides(n) {
  showSlides(slideIndex += n);
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("displayBlock");
    slides[i].classList.add("displayNone");
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  slides[slideIndex - 1].classList.remove("displayNone");
  slides[slideIndex - 1].classList.add("displayBlock");
  dots[slideIndex - 1].classList.add("active");
}
