document.addEventListener('DOMContentLoaded', function() {
    // Blog Filtering
    const filterButtons = document.querySelectorAll('.pk-category-btn');
    const blogCards = document.querySelectorAll('.pk-blog-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const category = button.getAttribute('data-category');

            // Filter blog cards with animation
            blogCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                
                if (category === 'all' || category === cardCategory) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Intersection Observer for Scroll Animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe blog cards and featured post
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(element);
    });

    // Blog Image Hover Effect
    const blogImages = document.querySelectorAll('.pk-blog-image');
    
    blogImages.forEach(img => {
        img.addEventListener('mouseenter', () => {
            img.querySelector('img').style.transform = 'scale(1.1)';
        });
        
        img.addEventListener('mouseleave', () => {
            img.querySelector('img').style.transform = 'scale(1)';
        });
    });

    // Newsletter Form Validation
    const newsletterForm = document.querySelector('.pk-newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();
            
            if (email) {
                // Here you would typically send the email to your server
                console.log('Subscribing email:', email);
                emailInput.value = '';
                // Show success message
                alert('Thank you for subscribing to our newsletter!');
            }
        });
    }
}); 