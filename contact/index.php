<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

<head>
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>

<body>
  <!-- Background Elements -->
  <div class="background">
    <div class="grid"></div>
  </div>
  
  <div class="animated-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
  </div>

  <?php
  include_once "../includes/nav.php";
  ?>

  <main>
    <!-- Hero Section -->
    <section class="section hero animate-on-scroll" id="contact-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Get in Touch</h1>
          <p class="hero-text">
            Have a project in mind? Let's discuss how we can help bring your vision to life.
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact animate-on-scroll">
      <div class="container">
        <div class="contact-grid">
          <!-- Contact Form -->
          <div class="contact-form-wrapper">
            <form id="contactForm" class="contact-form">
              <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control">
              </div>

              <div class="form-group">
                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary submit-btn">
                <i class="fas fa-paper-plane"></i> Send Message
              </button>

              <!-- Response Message Container -->
              <div id="formResponse" class="form-response"></div>
            </form>
          </div>

          <!-- Contact Information -->
          <div class="contact-info">
            <div class="info-card">
              <div class="card-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <h3>Our Location</h3>
              <p>Lahore, Pakistan</p>
              <a href="https://maps.google.com/?q=Lahore,Pakistan" target="_blank" class="btn-text">View on Map</a>
            </div>

            <div class="info-card">
              <div class="card-icon">
                <i class="fas fa-phone"></i>
              </div>
              <h3>Phone Number</h3>
              <p>+92 300 1234567</p>
              <a href="tel:+923001234567" class="btn-text">Call Us</a>
            </div>

            <div class="info-card">
              <div class="card-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <h3>Email Address</h3>
              <p>shujaurrehman210@gmail.com</p>
              <a href="mailto:shujaurrehman210@gmail.com" class="btn-text">Email Us</a>
            </div>

            <div class="info-card">
              <div class="card-icon">
                <i class="fab fa-whatsapp"></i>
              </div>
              <h3>WhatsApp</h3>
              <p>+92 300 1234567</p>
              <a href="https://wa.me/923001234567" class="btn-text">Chat on WhatsApp</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="section map animate-on-scroll">
      <div class="container">
        <div class="map-wrapper">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435518.6817850724!2d74.054194!3d31.4832206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1647881234567!5m2!1sen!2s"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq animate-on-scroll">
      <div class="container">
        <span class="section-subtitle">FAQ</span>
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div class="faq-list">
          <div class="faq-item">
            <button class="faq-question">
              What services do you offer?
              <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
              <p>We offer a comprehensive range of digital services including web development, mobile app development, UI/UX design, digital marketing, and tech consulting. Our team is equipped to handle projects of any scale.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              How long does a typical project take?
              <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
              <p>Project timelines vary depending on the scope and complexity. A simple website might take 2-4 weeks, while a complex web application could take 3-6 months. We'll provide a detailed timeline during our initial consultation.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              What is your pricing structure?
              <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
              <p>We offer flexible pricing options including fixed-price projects and hourly rates. The cost depends on your specific requirements and project scope. Contact us for a detailed quote tailored to your needs.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              Do you provide ongoing support?
              <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
              <p>Yes, we offer comprehensive support and maintenance services to ensure your digital solution continues to perform optimally. Our support packages include regular updates, security monitoring, and technical assistance.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta animate-on-scroll" id="cta">
      <div class="container">
        <div class="cta-content">
          <h2>Ready to Start Your Project?</h2>
          <p>Let's discuss how we can help your business grow.</p>
          <div class="cta-buttons">
            <a href="tel:+923001234567" class="btn btn-light">
              <i class="fas fa-phone"></i> Call Us
            </a>
            <a href="https://wa.me/923001234567" class="btn btn-outline-light">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Notification -->
  <div id="notification" class="notification"></div>

  <?php
  include_once "../includes/footer.php";
  ?>

  <!-- WhatsApp Fixed Button -->
  <a href="https://wa.me/923001234567" class="whatsapp-btn" aria-label="Contact on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Back to Top Button -->
  <a href="#top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="../assets/js/script.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
      // FAQ Accordion
      const faqItems = document.querySelectorAll('.faq-item');
      
      faqItems.forEach(item => {
          const question = item.querySelector('.faq-question');
          const answer = item.querySelector('.faq-answer');
          
          // Set initial state
          answer.style.maxHeight = '0px';
          
          question.addEventListener('click', () => {
              const isActive = item.classList.contains('active');
              
              // Close all FAQ items
              faqItems.forEach(faqItem => {
                  const faqAnswer = faqItem.querySelector('.faq-answer');
                  faqItem.classList.remove('active');
                  faqAnswer.style.maxHeight = '0px';
              });
              
              // Open clicked item if it wasn't active
              if (!isActive) {
                  item.classList.add('active');
                  answer.style.maxHeight = answer.scrollHeight + 'px';
              }
          });
      });

      // Contact Form Submission
      const contactForm = document.getElementById('contactForm');
      const formResponse = document.getElementById('formResponse');

      contactForm.addEventListener('submit', function(e) {
          e.preventDefault();
          
          const submitBtn = this.querySelector('.submit-btn');
          submitBtn.disabled = true;
          submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

          // Clear previous response
          formResponse.innerHTML = '';
          formResponse.className = 'form-response';

          // Get form data
          const formData = new FormData(this);

          // Send AJAX request
          $.ajax({
              url: '../includes/send-mail.php',
              type: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  try {
                      const data = JSON.parse(response);
                      
                      // Show response message
                      formResponse.innerHTML = `
                          <div class="response-message ${data.success ? 'success' : 'error'}">
                              <i class="fas ${data.success ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                              <p>${data.message}</p>
                          </div>
                      `;
                      
                      if (data.success) {
                          contactForm.reset();
                      }
                  } catch (error) {
                      formResponse.innerHTML = `
                          <div class="response-message error">
                              <i class="fas fa-exclamation-circle"></i>
                              <p>An error occurred. Please try again later.</p>
                          </div>
                      `;
                  }
              },
              error: function() {
                  formResponse.innerHTML = `
                      <div class="response-message error">
                          <i class="fas fa-exclamation-circle"></i>
                          <p>An error occurred. Please try again later.</p>
                      </div>
                  `;
              },
              complete: function() {
                  submitBtn.disabled = false;
                  submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
              }
          });
      });
  });
  </script>
</body>
</html> 