'use strict';



/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * NAVBAR TOGGLE FOR MOBILE
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER
 * active header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});



/**
 * SLIDER
 */

const sliders = document.querySelectorAll("[data-slider]");

const initSlider = function (currentSlider) {

  const sldierContainer = currentSlider.querySelector("[data-slider-container]");
  const sliderPrevBtn = currentSlider.querySelector("[data-slider-prev]");
  const sliderNextBtn = currentSlider.querySelector("[data-slider-next]");

  let currentSlidePos = 0;

  const moveSliderItem = function () {
    sldierContainer.style.transform = `translateX(-${sldierContainer.children[currentSlidePos].offsetLeft}px)`;
  }

  /**
   * NEXT SLIDE
   */

  const slideNext = function () {
    const slideEnd = currentSlidePos >= sldierContainer.childElementCount - 1;

    if (slideEnd) {
      currentSlidePos = 0;
    } else {
      currentSlidePos++;
    }

    moveSliderItem();
  }

  sliderNextBtn.addEventListener("click", slideNext);

  /**
   * PREVIOUS SLIDE
   */

  const slidePrev = function () {

    if (currentSlidePos <= 0) {
      currentSlidePos = sldierContainer.childElementCount - 1;
    } else {
      currentSlidePos--;
    }

    moveSliderItem();
  }

  sliderPrevBtn.addEventListener("click", slidePrev);

  const dontHaveExtraItem = sldierContainer.childElementCount <= 1;
  if (dontHaveExtraItem) {
    sliderNextBtn.style.display = "none";
    sliderPrevBtn.style.display = "none";
  }

}

for (let i = 0, len = sliders.length; i < len; i++) { initSlider(sliders[i]); }



/**
 * ACCORDION
 */

const accordions = document.querySelectorAll("[data-accordion]");

let lastActiveAccordion = accordions[0];

const initAccordion = function (currentAccordion) {

  const accordionBtn = currentAccordion.querySelector("[data-accordion-btn]");

  const expandAccordion = function () {
    if (lastActiveAccordion && lastActiveAccordion !== currentAccordion) {
      lastActiveAccordion.classList.remove("expanded");
    }

    currentAccordion.classList.toggle("expanded");

    lastActiveAccordion = currentAccordion;
  }

  accordionBtn.addEventListener("click", expandAccordion);

}

for (let i = 0, len = accordions.length; i < len; i++) { initAccordion(accordions[i]); }


// Scroll to reveal animation
function revealOnScroll() {
  const elements = document.querySelectorAll('.section, .service-card, .process-card, .portfolio-card, .testimonial-card, .blog-card, .faq-item');

  elements.forEach(element => {
    const elementTop = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (elementTop < windowHeight - 100) {
      element.classList.add('revealed');
    }
  });
}

// Call once on load
revealOnScroll();

// Header scroll effect
// Update the scroll event listener
window.addEventListener('scroll', function () {
  const header = document.getElementById('header');
  const scrollPosition = window.scrollY;
  const backToTop = document.querySelector('.back-to-top');

  // Header activation
  if (scrollPosition > 50) {
    header.classList.add('active');

    if (backToTop) {
      backToTop.classList.add('visible');
    }
  } else {
    header.classList.remove('active');

    if (backToTop) {
      backToTop.classList.remove('visible');
    }
  }

  // Call reveal on scroll
  revealOnScroll();
});
// Mobile nav toggle
const navToggleBtn = document.querySelector('.nav-toggle-btn');
const navbarList = document.querySelector('.navbar-list');

navToggleBtn.addEventListener('click', function () {
  navbarList.classList.toggle('active');

  // Change icon based on menu state
  const icon = this.querySelector('i');
  if (navbarList.classList.contains('active')) {
    icon.classList.remove('fa-bars');
    icon.classList.add('fa-times');
  } else {
    icon.classList.remove('fa-times');
    icon.classList.add('fa-bars');
  }
});

// Smooth scrolling for internal links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const targetId = this.getAttribute('href');

    if (targetId === '#top') {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
      return;
    }

    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      const headerHeight = document.querySelector('.header').offsetHeight;
      const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });

      // Close mobile menu if open
      if (navbarList.classList.contains('active')) {
        navbarList.classList.remove('active');
        navToggleBtn.querySelector('i').classList.remove('fa-times');
        navToggleBtn.querySelector('i').classList.add('fa-bars');
      }
    }
  });
});

// Hero Slider functionality
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.slider-dot');
let currentSlide = 0;

function showSlide(index) {
  // Hide all slides
  slides.forEach(slide => {
    slide.style.opacity = '0';
    slide.classList.remove('active');
  });

  // Remove active class from all dots
  dots.forEach(dot => {
    dot.classList.remove('active');
  });

  // Show current slide and activate corresponding dot
  slides[index].style.opacity = '1';
  slides[index].classList.add('active');
  dots[index].classList.add('active');
}

// Add click event to all dots
dots.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    currentSlide = index;
    showSlide(currentSlide);
  });
});

// Auto slide function
function autoSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

// Set interval for auto sliding
let slideInterval = setInterval(autoSlide, 5000);

// Pause auto slide on hover
const sliderContainer = document.querySelector('.hero-slider');
if (sliderContainer) {
  sliderContainer.addEventListener('mouseenter', () => {
    clearInterval(slideInterval);
  });

  sliderContainer.addEventListener('mouseleave', () => {
    slideInterval = setInterval(autoSlide, 5000);
  });
}

// Counter animation
function animateCounters() {
  const counters = document.querySelectorAll('.counter');
  const speed = 200; // Lower is faster

  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    const count = +counter.innerText;
    const increment = target / speed;

    if (count < target) {
      counter.innerText = Math.ceil(count + increment);
      setTimeout(animateCounters, 1);
    } else {
      counter.innerText = target;
    }
  });
}

// Start counter animation when counters are in viewport
const counterSection = document.querySelector('.counter-section');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateCounters();
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

if (counterSection) {
  observer.observe(counterSection);
}

// FAQ Accordion
const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
  question.addEventListener('click', () => {
    const faqItem = question.parentElement;
    const isActive = faqItem.classList.contains('active');

    // Close all other items
    document.querySelectorAll('.faq-item').forEach(item => {
      item.classList.remove('active');
      item.querySelector('.faq-icon i').classList.remove('fa-minus');
      item.querySelector('.faq-icon i').classList.add('fa-plus');
    });

    // Toggle current item
    if (!isActive) {
      faqItem.classList.add('active');
      question.querySelector('.faq-icon i').classList.remove('fa-plus');
      question.querySelector('.faq-icon i').classList.add('fa-minus');
    }
  });
});

const contactForm = document.querySelector('.contact-form');

if (contactForm) {
  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    let valid = true;
    const fields = contactForm.querySelectorAll('input, textarea, select');

    fields.forEach(field => {
      if (field.hasAttribute('required') && !field.value.trim()) {
        field.classList.add('error');
        valid = false;
      } else {
        field.classList.remove('error');
      }

      if (field.type === 'email' && field.value) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(field.value)) {
          field.classList.add('error');
          valid = false;
        }
      }
    });

    if (valid) {
      // 👉 Submit the form manually after validation
      contactForm.submit();
    } else {
      alert('Please fill in all required fields correctly.');
    }
  });
}

// Google Reviews Slider
const reviewsTrack = document.querySelector('.reviews-track');
const reviewCards = document.querySelectorAll('.google-review-card');
const prevButton = document.querySelector('.review-nav.prev');
const nextButton = document.querySelector('.review-nav.next');
let currentIndex = 0;
let cardWidth;
let visibleCards;

function updateReviewSlider() {
  const screenWidth = window.innerWidth;

  if (screenWidth > 992) {
    visibleCards = 3;
  } else if (screenWidth > 576) {
    visibleCards = 2;
  } else {
    visibleCards = 1;
  }

  cardWidth = reviewCards[0].offsetWidth + 30; // Card width + gap

  // Reset position
  reviewsTrack.style.transform = `translateX(0)`;
  currentIndex = 0;

  // Hide/show navigation based on card count
  if (reviewCards.length <= visibleCards) {
    prevButton.style.display = 'none';
    nextButton.style.display = 'none';
  } else {
    prevButton.style.display = 'flex';
    nextButton.style.display = 'flex';
  }
}

function moveReviews(direction) {
  const maxIndex = reviewCards.length - visibleCards;

  if (direction === 'next') {
    currentIndex = Math.min(currentIndex + 1, maxIndex);
  } else {
    currentIndex = Math.max(currentIndex - 1, 0);
  }

  reviewsTrack.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

  // Update button states
  prevButton.disabled = currentIndex === 0;
  nextButton.disabled = currentIndex === maxIndex;
}

// Initialize slider
if (reviewsTrack && reviewCards.length > 0) {
  window.addEventListener('load', updateReviewSlider);
  window.addEventListener('resize', updateReviewSlider);

  prevButton.addEventListener('click', () => moveReviews('prev'));
  nextButton.addEventListener('click', () => moveReviews('next'));

  // Initial button state
  prevButton.disabled = true;
}
