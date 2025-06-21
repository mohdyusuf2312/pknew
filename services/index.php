<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

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
    <section class="section hero" id="services-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Our Services</h1>
          <p class="hero-text">
            Comprehensive digital solutions tailored to your business needs. From web development to digital marketing, we've got you covered.
          </p>
        </div>
      </div>
    </section>

    <!-- Services Grid -->
    <section class="section services-grid" style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px);">
      <div class="container">
        <span class="section-subtitle">What We Offer</span>
        <h2 class="section-title">Our Services</h2>
        <div class="grid-list">
          <!-- Web Development -->
          <div class="service-card" id="web-dev">
            <div class="card-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3 class="card-title">Web Development</h3>
            <p class="card-text">
              We create stunning, responsive websites and web applications that align with your business goals and brand identity.
            </p>
            <ul class="service-list">
              <li>Custom Website Development</li>
              <li>E-commerce Solutions</li>
              <li>Web Applications</li>
              <li>CMS Development</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <!-- Mobile App Development -->
          <div class="service-card" id="mobile">
            <div class="card-icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="card-title">Mobile App Development</h3>
            <p class="card-text">
              From idea to launch, we build fast, scalable, and cross-platform apps that deliver outstanding mobile experiences.
            </p>
            <ul class="service-list">
              <li>iOS & Android Apps</li>
              <li>Cross-platform Development</li>
              <li>App Maintenance</li>
              <li>UI/UX Design</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <!-- UI/UX Design -->
          <div class="service-card" id="ui-ux">
            <div class="card-icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <h3 class="card-title">UI/UX Design</h3>
            <p class="card-text">
              We create intuitive and engaging user interfaces that enhance user experience and drive conversions.
            </p>
            <ul class="service-list">
              <li>User Interface Design</li>
              <li>User Experience Design</li>
              <li>Wireframing & Prototyping</li>
              <li>Design Systems</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <!-- Tech Consulting -->
          <div class="service-card" id="consulting">
            <div class="card-icon">
              <i class="fas fa-cogs"></i>
            </div>
            <h3 class="card-title">Tech Consulting</h3>
            <p class="card-text">
              Strategic technology consulting to help your business leverage the latest technologies and optimize digital processes.
            </p>
            <ul class="service-list">
              <li>Technology Strategy & Planning</li>
              <li>System Architecture Design</li>
              <li>Digital Transformation</li>
              <li>Performance Optimization</li>
              <li>Security Assessment</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <!-- Maintenance & Support -->
          <div class="service-card" id="support">
            <div class="card-icon">
              <i class="fas fa-tools"></i>
            </div>
            <h3 class="card-title">Maintenance & Support</h3>
            <p class="card-text">
              Comprehensive maintenance and support services to keep your websites and applications running smoothly and securely.
            </p>
            <ul class="service-list">
              <li>Website Maintenance</li>
              <li>Security Updates & Monitoring</li>
              <li>Performance Optimization</li>
              <li>Bug Fixes & Troubleshooting</li>
              <li>24/7 Technical Support</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <!-- Digital Marketing -->
          <div class="service-card" id="digital-marketing">
            <div class="card-icon">
              <i class="fas fa-bullhorn"></i>
            </div>
            <h3 class="card-title">Digital Marketing</h3>
            <p class="card-text">
              Grow your online presence with our comprehensive digital marketing strategies and data-driven solutions.
            </p>
            <ul class="service-list">
              <li>SEO Optimization</li>
              <li>Social Media Marketing</li>
              <li>Content Marketing</li>
              <li>PPC Campaigns</li>
              <li>Analytics & Reporting</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <!-- Graphic Design -->
          <div class="service-card" id="graphic-design">
            <div class="card-icon">
              <i class="fas fa-palette"></i>
            </div>
            <h3 class="card-title">Graphic Design</h3>
            <p class="card-text">
              Create compelling visual content that captures attention and communicates your brand message effectively.
            </p>
            <ul class="service-list">
              <li>Brand Identity Design</li>
              <li>Marketing Materials</li>
              <li>Social Media Graphics</li>
              <li>Print & Digital Design</li>
            </ul>
            <a href="../contact/" class="btn-text">
              <span>Get Started</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- Why Choose Us -->
    <section class="section why-choose-us">
      <div class="container">
        <span class="section-subtitle">Why Choose Us</span>
        <h2 class="section-title">Our Approach to Success</h2>
        
        <div class="features-grid">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Client Collaboration</h3>
            <p>We work closely with you throughout the project, ensuring your vision is realized.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h3>Timely Delivery</h3>
            <p>We respect deadlines and deliver projects on time, every time.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-code"></i>
            </div>
            <h3>Clean Code</h3>
            <p>We write maintainable, scalable code following industry best practices.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Quality Assurance</h3>
            <p>Rigorous testing ensures your solution is bug-free and performs optimally.</p>
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
            <a href="../contact/" class="btn btn-light">
              <i class="fas fa-envelope"></i> Get in Touch
            </a>
            <a href="https://wa.me/917579966178" class="btn btn-outline-light">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php
  include_once "../includes/footer.php";
  ?>

  <!-- WhatsApp Fixed Button -->
  <a href="https://wa.me/917579966178" class="whatsapp-btn" aria-label="Contact on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Back to Top Button -->
  <a href="#top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="../assets/js/script.js"></script>
</body>
</html> 