<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

<head>
  <!-- Add Portfolio CSS -->
  <link rel="stylesheet" href="../assets/css/portfolio.css">
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
    <section class="section hero" id="portfolio-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Our Portfolio</h1>
          <p class="hero-text">
            Explore our latest projects and see how we've helped businesses transform their digital presence.
          </p>
        </div>
      </div>
    </section>

    <!-- Portfolio Categories -->
    <section class="pk-portfolio-filter">
      <div class="container">
        <div class="pk-filter-buttons">
          <button class="pk-filter-btn active" data-category="all">All Projects</button>
          <button class="pk-filter-btn" data-category="web">Web Development</button>
          <button class="pk-filter-btn" data-category="app">Mobile Apps</button>
          <button class="pk-filter-btn" data-category="design">UI/UX Design</button>
          <button class="pk-filter-btn" data-category="ecommerce">E-commerce</button>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="pk-portfolio-showcase">
      <div class="container">
        <div class="pk-portfolio-grid">
          <!-- Project 1 -->
          <div class="pk-project-card" data-category="web">
            <div class="pk-project-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="E-commerce Website">
              <div class="pk-project-overlay">
                <a href="#" class="pk-view-btn">View Details</a>
              </div>
            </div>
            <div class="pk-project-info">
              <span class="pk-project-category">Web Development</span>
              <h3 class="pk-project-title">Modern E-commerce Platform</h3>
              <p class="pk-project-description">A full-featured online store with advanced product management and payment integration.</p>
              <div class="pk-project-tags">
                <span class="pk-tag">PHP</span>
                <span class="pk-tag">MySQL</span>
                <span class="pk-tag">JavaScript</span>
              </div>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="pk-project-card" data-category="app">
            <div class="pk-project-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="Mobile App">
              <div class="pk-project-overlay">
                <a href="#" class="pk-view-btn">View Details</a>
              </div>
            </div>
            <div class="pk-project-info">
              <span class="pk-project-category">App Development</span>
              <h3 class="pk-project-title">Fitness Tracking App</h3>
              <p class="pk-project-description">Cross-platform mobile application for tracking workouts and nutrition.</p>
              <div class="pk-project-tags">
                <span class="pk-tag">React Native</span>
                <span class="pk-tag">Firebase</span>
                <span class="pk-tag">Node.js</span>
              </div>
            </div>
          </div>

          <!-- Project 3 -->
          <div class="pk-project-card" data-category="design">
            <div class="pk-project-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="UI/UX Design">
              <div class="pk-project-overlay">
                <a href="#" class="pk-view-btn">View Details</a>
              </div>
            </div>
            <div class="pk-project-info">
              <span class="pk-project-category">UI/UX Design</span>
              <h3 class="pk-project-title">Banking Dashboard</h3>
              <p class="pk-project-description">Modern banking interface with intuitive user experience and real-time analytics.</p>
              <div class="pk-project-tags">
                <span class="pk-tag">Figma</span>
                <span class="pk-tag">Adobe XD</span>
                <span class="pk-tag">Prototyping</span>
              </div>
            </div>
          </div>

          <!-- Project 4 -->
          <div class="pk-project-card" data-category="ecommerce">
            <div class="pk-project-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="E-commerce Store">
              <div class="pk-project-overlay">
                <a href="#" class="pk-view-btn">View Details</a>
              </div>
            </div>
            <div class="pk-project-info">
              <span class="pk-project-category">E-commerce</span>
              <h3 class="pk-project-title">Fashion Retail Store</h3>
              <p class="pk-project-description">Custom e-commerce solution for a premium fashion brand.</p>
              <div class="pk-project-tags">
                <span class="pk-tag">WooCommerce</span>
                <span class="pk-tag">WordPress</span>
                <span class="pk-tag">Custom Theme</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section why-choose-us">
      <div class="container">
        <span class="section-subtitle">Why Choose Us</span>
        <h2 class="section-title">Why Partner with PixelKrafts?</h2>
        
        <div class="grid-list">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Results-Driven Solutions</h3>
            <p>We focus on building digital products that deliver measurable business outcomes.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Seamless User Experience</h3>
            <p>Our designs prioritize intuitive navigation and engaging interactions on all devices.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-rocket"></i>
            </div>
            <h3>Scalable & Future-Proof</h3>
            <p>We build solutions with robust architecture that can grow with your business.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h3>Dedicated Support</h3>
            <p>We provide ongoing maintenance and support to ensure long-term success.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta" id="cta">
      <div class="container">
        <div class="cta-content">
          <h2>Ready to Start Your Project?</h2>
          <p>Let's create something amazing together.</p>
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

  <!-- Scripts -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/portfolio.js"></script>
</body>
</html> 