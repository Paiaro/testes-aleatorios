'use strict';


let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');
let slideInterval = setInterval(moveSlide, 2000, 1); 

function showSlide(index) {
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const newTransform = -100 * currentSlide;
    document.getElementById('carouselItems').style.transform = `translateX(${newTransform}%)`;
}

function moveSlide(direction) {
    showSlide(currentSlide + direction);
    resetInterval();
}

function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(moveSlide, 2000, 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(0);
});
// --------------condição para dispositivos moveis (toque).
let touchStartX = 0;
let touchEndX = 0;

function checkSwipeDirection() {
    if (touchEndX < touchStartX - 50) {
        moveSlide(1); // Deslize para esquerda, mover para o próximo slide
    }
    if (touchEndX > touchStartX + 50) {
        moveSlide(-1); // Deslize para direita, mover para o slide anterior
    }
}

document.getElementById('carouselItems').addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
});

document.getElementById('carouselItems').addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    checkSwipeDirection();
});
