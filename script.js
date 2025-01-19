let currentSlide = 1;
const totalSlides = 4;

function showSlide(slideNumber) {
    // Hide all slides
    const slides = document.querySelectorAll('.slide');
    slides.forEach(slide => slide.style.display = 'none');

    // Show the current slide
    const current = document.getElementById('slide' + slideNumber);
    current.style.display = 'block';
    setTimeout(() => current.style.opacity = 1, 10);  // Fade-in effect
}

function nextSlide() {
    if (currentSlide < totalSlides) {
        currentSlide++;
    } else {
        currentSlide = 1;  // Loop back to the first slide
    }
    showSlide(currentSlide);
}

function prevSlide() {
    if (currentSlide > 1) {
        currentSlide--;
    } else {
        currentSlide = totalSlides;  // Loop back to the last slide
    }
    showSlide(currentSlide);
}

// Initialize the first slide
showSlide(currentSlide);
