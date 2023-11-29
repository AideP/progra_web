let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const slideInterval = 3000; // Cambia el tiempo en milisegundos (ej. 3000 = 3 segundos)

function showSlide(index) {
    if (index < 0) {
        currentSlide = slides.length - 1;
    } else if (index >= slides.length) {
        currentSlide = 0;
    }

    slides.forEach((slide, i) => {
        if (i === currentSlide) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}

function changeSlide(n) {
    currentSlide += n;
    showSlide(currentSlide);
}

function startCarousel() {
    setInterval(() => {
        changeSlide(1);
    }, slideInterval);
}

showSlide(currentSlide);
startCarousel();




// setTimeout(changeSlide, 2000);