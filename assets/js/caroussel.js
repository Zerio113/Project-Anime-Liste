const carouselImages = document.querySelectorAll('.img-carrusel');

carouselImages.forEach(image => {
  image.addEventListener('transitionend', function() {
    this.classList.add('fadeOut');
  });
});