const slides = document.querySelectorAll('.slide');
const prevButton = document.querySelector('.prev-slide');
const nextButton = document.querySelector('.next-slide');

let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide) => {
        slide.style.display = 'none';
    });
    slides[index].style.display = 'block';
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

prevButton.addEventListener('click', prevSlide);
nextButton.addEventListener('click', nextSlide);

showSlide(currentSlide);
