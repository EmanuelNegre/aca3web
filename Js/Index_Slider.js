const slides = document.querySelectorAll('.slide');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide) => {
        slide.style.display = 'none';
    });
    slides[index].style.display = 'block';
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

rightArrow.addEventListener('click', nextSlide);
leftArrow.addEventListener('click', prevSlide);

setInterval(nextSlide, 2000); 
showSlide(currentSlide); 

