const carousel = document.querySelector('.carousel');
const carouselItems = carousel.querySelectorAll('.carousel-item');

function resizeCarousel() {
  const carouselWidth = carousel.offsetWidth;
  carouselItems.forEach((item, index) => {
    item.style.width = `${carouselWidth}px`;
  });
}

window.addEventListener('resize', resizeCarousel);
resizeCarousel();