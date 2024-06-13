let currentImage = 0;

function showSlide(image) {
  const slides = document.querySelector(".slides");
  const totalSlides = slides.querySelectorAll("img").length;
  if (image >= totalSlides) {
    currentImage = 0;
  } else if (image < 0) {
    currentImage = totalSlides - 1;
  } else {
    currentImage = image;
  }
  const offset = -currentImage * 100;
  slides.style.transform = `translateX(${offset}%)`;
}

setInterval(() => {
  showSlide(currentImage + 1);
}, 3000); // Change slide every 3 seconds

document.addEventListener("DOMContentLoaded", () => {
  showSlide(currentImage);
});
