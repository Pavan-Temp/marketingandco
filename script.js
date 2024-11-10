document.addEventListener('DOMContentLoaded', () => {
    // Case Studies Slider
    const caseStudies = document.querySelectorAll('.case-study');
    const sliderDots = document.querySelector('.slider-dots');
    let currentSlide = 0;

    caseStudies.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('slider-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        sliderDots.appendChild(dot);
    });

    function goToSlide(index) {
        caseStudies[currentSlide].classList.remove('active');
        sliderDots.children[currentSlide].classList.remove('active');
        currentSlide = index;
        caseStudies[currentSlide].classList.add('active');
        sliderDots.children[currentSlide].classList.add('active');
    }

    setInterval(() => {
        goToSlide((currentSlide + 1) % caseStudies.length);
    }, 5000);

    // Startup Process Accordion
    const processSteps = document.querySelectorAll('.process-step');

    processSteps.forEach(step => {
        const header = step.querySelector('.step-header');
        header.addEventListener('click', () => {
            step.classList.toggle('active');
        });
    });

    // Form Submission (placeholder)
    const contactForm = document.querySelector('.contact-form');
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Form submitted! (This is a placeholder action)');
    });
});