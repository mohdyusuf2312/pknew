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
    <section class="section hero" id="about-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">About PixelKrafts</h1>
          <p class="hero-text">
            We are a team of passionate developers, designers, and digital strategists dedicated to creating exceptional digital experiences.
          </p>
        </div>
      </div>
    </section>

    <!-- Our Story Section -->
    <section class="section about-story">
      <div class="container">
        <div class="about-content">
          <div class="about-text">
            <h2>Our Story</h2>
            <p>
              Founded by Shuja Ur Rahman and Syed Faizan Jeelani, PixelKrafts emerged from a shared vision to deliver high-quality digital solutions that make a real impact. Our journey began with a simple mission: to help businesses thrive in the digital age through innovative technology and creative design.
            </p>
            <p>
              Today, we've grown into a full-service digital agency, serving clients across various industries with our comprehensive suite of services.
            </p>
          </div>
          <div class="about-img">
            <img src="/pknew/assets/images/blog-1.jpg" alt="PixelKrafts Team">
          </div>
        </div>
      </div>
    </section>

    <!-- Values Section -->
    <section class="section values">
      <div class="container">
        <span class="section-subtitle">Our Values</span>
        <h2 class="section-title">What Drives Us</h2>
        
        <div class="grid-list">
          <div class="service-card">
            <div class="card-icon">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h3 class="card-title">Innovation</h3>
            <p class="card-text">
              We constantly explore new technologies and approaches to deliver cutting-edge solutions.
            </p>
          </div>

          <div class="service-card">
            <div class="card-icon">
              <i class="fas fa-handshake"></i>
            </div>
            <h3 class="card-title">Integrity</h3>
            <p class="card-text">
              We maintain the highest standards of professionalism and ethical business practices.
            </p>
          </div>

          <div class="service-card">
            <div class="card-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3 class="card-title">Collaboration</h3>
            <p class="card-text">
              We work closely with our clients to ensure their vision becomes reality.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Technologies Section -->
    <section class="section technologies animate-on-scroll">
        <div class="container">
            <span class="section-subtitle">Our Stack</span>
            <h2 class="section-title">Technologies We Master</h2>

            <div class="grid-list">
                <div class="tech-card">
                    <div class="tech-icon">
                         <i class="fab fa-html5"></i>
                    </div>
                    <h3>HTML5 & CSS3</h3>
                    <p>Building modern, responsive, and visually appealing user interfaces.</p>
                </div>
                 <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <h3>JavaScript</h3>
                    <p>Adding dynamic behavior and interactivity to web applications.</p>
                </div>
                 <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <h3>PHP</h3>
                    <p>Developing robust and scalable server-side applications.</p>
                </div>
                 <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-react"></i>
                    </div>
                    <h3>React & Vue.js</h3>
                    <p>Creating efficient and dynamic single-page applications.</p>
                </div>
                 <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fab fa-node-js"></i>
                    </div>
                    <h3>Node.js</h3>
                    <p>Building fast and scalable network applications.</p>
                </div>
                 <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Databases (SQL/NoSQL)</h3>
                    <p>Designing and managing efficient data storage solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section team">
      <div class="container">
        <span class="section-subtitle">Our Team</span>
        <h2 class="section-title">Meet the Minds Behind PixelKrafts</h2>
        
        <div class="grid-list">
          <div class="team-card">
            <div class="team-img">
              <img src="/pknew/assets/images/blog-1.jpg" alt="Shuja Ur Rahman">
            </div>
            <div class="team-content">
              <h3 class="team-name">Shuja Ur Rahman</h3>
              <p class="team-position">Co-Founder & Lead Developer</p>
              <p class="team-bio">
                With over 5 years of experience in web development and software architecture, Shuja leads our technical team.
              </p>
              <div class="team-social">
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>

          <div class="team-card">
            <div class="team-img">
              <img src="/pknew/assets/images/blog-1.jpg" alt="Syed Faizan Jeelani">
            </div>
            <div class="team-content">
              <h3 class="team-name">Syed Faizan Jeelani</h3>
              <p class="team-position">Co-Founder & Creative Director</p>
              <p class="team-bio">
                Faizan brings his expertise in UI/UX design and digital strategy to create engaging user experiences.
              </p>
              <div class="team-social">
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
                <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
              </div>
            </div>
          </div>

          <div class="team-card">
            <div class="team-img">
              <img src="/pknew/assets/images/blog-1.jpg" alt="Jaya Rawat">
            </div>
            <div class="team-content">
              <h3 class="team-name">Jaya Rawat</h3>
              <p class="team-position">SEO Expert & Social Media Manager</p>
              <p class="team-bio">
                Jaya specializes in SEO optimization and social media management, helping businesses grow their online presence.
              </p>
              <div class="team-social">
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta" id="cta">
      <div class="container">
        <div class="cta-content">
          <h2>Ready to Work Together?</h2>
          <p>Let's create something amazing for your business.</p>
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