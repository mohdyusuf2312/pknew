<!DOCTYPE html>
<html lang="en">
<?php
include_once "./includes/header.php";
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

  <!-- Main Header -->

    <?php
  include_once "./includes/nav.php";
  ?>

  <main>
    <!-- Hero Section with Slider -->
    <section class="hero" id="home">
      <div class="container hero-container">
        <div class="hero-content">
          <h1 class="hero-title">Craft. Create. Conquer.</h1>
          <p class="hero-text">
            From ultra-fast, clean websites to advanced automation solutions, we help businesses progress using the latest technology. Our team delivers pixel-perfect results across design, development, tech consulting, and marketing.
          </p>
          <div class="btn-wrapper">
            <a href="./assets/catalogue.pdf" target="" class="btn btn-primary">Portfolio </a>
            <a href="#services" class="btn btn-outline">Explore Services</a>
          </div>
        </div>
        
        <div class="hero-slider">
          <div class="slides">
            <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/0.JPG" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/1.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/2.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/3.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/4.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/5.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/6.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/7.jpg" alt="Web Development Solutions">
            </div>
                        <div class="slide active">
              <img src="https://eubiq.b-cdn.net/public/slider/8.jpg" alt="Web Development Solutions">
            </div>

          </div>
        </div>
      </div>
    </section>

   

    <!-- Services Section -->
    <section class="section services" id="services">
      <div class="container">
        <span class="section-subtitle">Our Services</span>
        <h2 class="section-title">What We Offer</h2>
        
        <div class="grid-list">
          <div class="service-card">
            <div class="card-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3 class="card-title">Web Design & Development</h3>
            <p class="card-text">
              We create stunning, responsive websites and web apps that align with your business goals and brand identity.
            </p>
            <ul class="service-list">
              <li>UI/UX Design</li>
              <li>Portfolio & Business Websites</li>
              <li>eCommerce & Web Apps</li>
              <li>AI-Integrated Web Projects</li>
            </ul>
            <a href="/pknew/contact/" class="btn-text">
              <span>Learn More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="card-icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="card-title">App Development</h3>
            <p class="card-text">
              From idea to launch, we build fast, scalable, and cross-platform apps that deliver outstanding mobile experiences.
            </p>
            <ul class="service-list">
              <li>Android & iOS Apps</li>
              <li>Cross-platform Solutions</li>
              <li>Real-time Features</li>
              <li>Backend & API Integration</li>
            </ul>
            <a href="/pknew/contact/" class="btn-text">
              <span>Learn More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <div class="service-card">
            <div class="card-icon">
              <i class="fas fa-bullhorn"></i>
            </div>
            <h3 class="card-title">SEO & Social Media Management</h3>
            <p class="card-text">
              Grow your online presence with powerful SEO tactics and strategic social media management tailored to your audience.
            </p>
            <ul class="service-list">
              <li>On-page & Technical SEO</li>
              <li>Instagram & Facebook Growth</li>
              <li>LinkedIn & Google Strategy</li>
              <li>Analytics & Optimization</li>
            </ul>
            <a href="/pknew/contact/" class="btn-text">
              <span>Learn More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <div class="section-cta">
          <a href="/pknew/services/" class="btn btn-primary">Explore All Services</a>
        </div>
      </div>
    </section>


    <!-- New Development Process Section (Clean & Minimal) -->
    <section class="section process" id="process">
      <div class="container">
        <span class="section-subtitle">Our Process</span>
        <h2 class="section-title">How We Work</h2>
        
        <div class="process-cards-container">
          <div class="process-flow-line"></div>
          
          <div class="process-cards">
            <div class="process-card" data-index="1">
              <div class="process-icon">
                <i class="fas fa-lightbulb"></i>
              </div>
              <div class="process-content">
                <div class="process-number">01</div>
                <h3>Discovery</h3>
                <p>We analyze your business needs, target audience, and project requirements to establish the right strategy and roadmap.</p>
              </div>
            </div>
            
            <div class="process-card" data-index="2">
              <div class="process-icon">
                <i class="fas fa-pencil-ruler"></i>
              </div>
              <div class="process-content">
                <div class="process-number">02</div>
                <h3>Design</h3>
                <p>Our team creates intuitive wireframes and visually appealing designs that align with your brand identity and user needs.</p>
              </div>
            </div>
            
            <div class="process-card" data-index="3">
              <div class="process-icon">
                <i class="fas fa-code"></i>
              </div>
              <div class="process-content">
                <div class="process-number">03</div>
                <h3>Development</h3>
                <p>Using modern technologies and best practices, we build robust, scalable solutions with clean, maintainable code.</p>
              </div>
            </div>
            
            <div class="process-card" data-index="4">
              <div class="process-icon">
                <i class="fas fa-vial"></i>
              </div>
              <div class="process-content">
                <div class="process-number">04</div>
                <h3>Testing</h3>
                <p>We conduct thorough quality assurance across devices to ensure optimal performance, security, and user experience.</p>
              </div>
            </div>
            
            <div class="process-card" data-index="5">
              <div class="process-icon">
                <i class="fas fa-rocket"></i>
              </div>
              <div class="process-content">
                <div class="process-number">05</div>
                <h3>Launch</h3>
                <p>Your solution is carefully deployed with performance optimization, SEO implementation, and analytics integration.</p>
              </div>
            </div>
            
            <div class="process-card" data-index="6">
              <div class="process-icon">
                <i class="fas fa-headset"></i>
              </div>
              <div class="process-content">
                <div class="process-number">06</div>
                <h3>Support</h3>
                <p>We provide ongoing maintenance, updates, and technical support to ensure your digital product's long-term success.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="section-cta">
          <a href="/pknew/process/" class="btn btn-primary">Learn About Our Process</a>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
      <div class="container">
        <span class="section-subtitle">About Us</span>
        <h2 class="section-title">Who We Are & What We Do</h2>

        <div class="about-content">
          <div class="about-text">
            <h3>Crafting Digital Experiences with Precision</h3>
            <p>
              PixelKrafts is a software solutions agency founded by Shuja Ur Rahman and Syed Faizan Jeelani, combining their expertise in development, design, and digital marketing to deliver comprehensive solutions for businesses.
            </p>
            <p>
              Our approach integrates clean code, thoughtful design, and strategic planning to create digital products that not only look great but perform exceptionally well.
            </p>

            <ul class="about-features">
              <li class="feature-item">
                <span class="feature-icon"><i class="fas fa-check"></i></span>
                <span>Clean, maintainable code that scales with your business</span>
              </li>
              <li class="feature-item">
                <span class="feature-icon"><i class="fas fa-check"></i></span>
                <span>User-centered design focused on conversion and engagement</span>
              </li>
              <li class="feature-item">
                <span class="feature-icon"><i class="fas fa-check"></i></span>
                <span>Performance optimization for lightning-fast experiences</span>
              </li>
              <li class="feature-item">
                <span class="feature-icon"><i class="fas fa-check"></i></span>
                <span>Strategic tech consulting for sustainable growth</span>
              </li>
            </ul>
            
            <div class="about-cta">
              <a href="#/pknew/contact/" class="btn btn-primary">Get In Touch</a>
              <a href="assets/catalogue.pdf" class="btn btn-outline">Download Portfolio</a>
            </div>
          </div>

          <div class="about-img">
            <img src="assets/images/hero" alt="PixelKrafts Team">
          </div>
        </div>

        <div class="section-cta">
          <a href="/pknew/about/" class="btn btn-primary">Learn More About Us</a>
        </div>
      </div>
    </section>

   
    <!-- Testimonials Section -->
    <section class="section testimonials">
      <div class="container">
        <span class="section-subtitle">Testimonials</span>
        <h2 class="section-title">What Our Clients Say</h2>

        <div class="grid-list">
          <div class="testimonial-card">
            <p class="testimonial-text">
              "PixelKrafts transformed our outdated website into a modern, user-friendly platform that has significantly increased our conversion rates. Their attention to detail and technical expertise is unmatched."
            </p>
            <div class="client-info">
              <!--<div class="client-avatar">-->
              <!--  <img src="assets/images/hero-slide-1.jpg" alt="Sarah Johnson">-->
              <!--</div>-->
              <div>
                <h4 class="client-name">Asif Raza</h4>
                <p class="client-position">eCommerce Website,Jaipur</p>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-text">
              "The team at PixelKrafts delivered our custom software application ahead of schedule and exceeded our expectations. Their communication throughout the project was excellent."
            </p>
            <div class="client-info">
              <!--<div class="client-avatar">-->
              <!--  <img src="assets/images/hero-slide-2.jpg" alt="Michael Chen">-->
              <!--</div>-->

                            <div>
                <h4 class="client-name">Akshat Rana </h4>
                <p class="client-position">Elearning App,Delhi</p>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <p class="testimonial-text">
              "From design to implementation, PixelKrafts provided exceptional service. The automation solutions they built have saved our team countless hours of manual work."
            </p>
            <div class="client-info">
              <!--<div class="client-avatar">-->
              <!--  <img src="assets/images/hero-slide-3.jpg" alt="Priya Patel">-->
              <!--</div>-->
            <div>
                <h4 class="client-name">Michael Chen</h4>
                <p class="client-position">Shopify Custom Store, GrowthFirm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section portfolio" id="portfolio">
      <div class="container">
        <span class="section-subtitle">Our Work</span>
        <h2 class="section-title">Featured Projects</h2>
        
        <div class="portfolio-grid">
          <div class="portfolio-card">
            <div class="portfolio-img">
              <img src="assets/images/portfolio/project1.jpg" alt="E-commerce Website">
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">Web Development</span>
              <h3 class="portfolio-title">Modern E-commerce Platform</h3>
              <p class="portfolio-description">A full-featured online store with advanced product management and payment integration.</p>
              <a href="/pknew/portfolio/#project1" class="btn-text">
                <span>View Project</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="portfolio-card">
            <div class="portfolio-img">
              <img src="assets/images/portfolio/project2.jpg" alt="Mobile App">
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">App Development</span>
              <h3 class="portfolio-title">Fitness Tracking App</h3>
              <p class="portfolio-description">Cross-platform mobile application for tracking workouts and nutrition.</p>
              <a href="/pknew/portfolio/#project2" class="btn-text">
                <span>View Project</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="portfolio-card">
            <div class="portfolio-img">
              <img src="assets/images/portfolio/project3.jpg" alt="UI/UX Design">
            </div>
            <div class="portfolio-content">
              <span class="portfolio-category">UI/UX Design</span>
              <h3 class="portfolio-title">Banking Dashboard</h3>
              <p class="portfolio-description">Modern banking interface with intuitive user experience and real-time analytics.</p>
              <a href="/pknew/portfolio/#project3" class="btn-text">
                <span>View Project</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="section-cta">
          <a href="/pknew/portfolio/" class="btn btn-primary">View All Projects</a>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section class="section blog" id="blog">
      <div class="container">
        <span class="section-subtitle">Latest Updates</span>
        <h2 class="section-title">From Our Blog</h2>
        
        <div class="blog-grid">
          <div class="blog-card">
            <div class="blog-img">
              <img src="assets/images/blog/post1.jpg" alt="Web Development Trends">
              <div class="blog-date">
                <span>15</span>
                <span>Mar</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="fas fa-user"></i> Admin</span>
                <span><i class="fas fa-comments"></i> 3 Comments</span>
              </div>
              <h3 class="blog-title">Top Web Development Trends in 2024</h3>
              <p class="blog-excerpt">Explore the latest trends shaping the future of web development and how they impact your business.</p>
              <a href="/blog/#post1" class="btn-text">
                <span>Read More</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="blog-card">
            <div class="blog-img">
              <img src="assets/images/blog/post2.jpg" alt="Mobile App Development">
              <div class="blog-date">
                <span>10</span>
                <span>Mar</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="fas fa-user"></i> Admin</span>
                <span><i class="fas fa-comments"></i> 5 Comments</span>
              </div>
              <h3 class="blog-title">Mobile App Development Best Practices</h3>
              <p class="blog-excerpt">Learn the essential best practices for creating successful mobile applications in today's market.</p>
              <a href="/blog/#post2" class="btn-text">
                <span>Read More</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="blog-card">
            <div class="blog-img">
              <img src="assets/images/blog/post3.jpg" alt="UI/UX Design">
              <div class="blog-date">
                <span>05</span>
                <span>Mar</span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="fas fa-user"></i> Admin</span>
                <span><i class="fas fa-comments"></i> 2 Comments</span>
              </div>
              <h3 class="blog-title">The Importance of User Experience in Web Design</h3>
              <p class="blog-excerpt">Discover why user experience is crucial for your website's success and how to improve it.</p>
              <a href="/blog/#post3" class="btn-text">
                <span>Read More</span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="blog-cta">
          <a href="/pknew/blog/" class="btn btn-primary">View All Posts</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq" id="faq">
      <div class="container">
        <span class="section-subtitle">Common Questions</span>
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div class="faq-grid">
          <div class="faq-item">
            <div class="faq-question">
              <h3>What services does PixelKrafts offer?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>We specialize in custom website development, mobile app development, UI/UX design, digital marketing, SEO, software maintenance, and cloud solutions. Our comprehensive services are designed to meet all your digital needs under one roof.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>Do you provide custom website and app development?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Yes, we specialize in custom development tailored to your specific business needs. We don't use templates or one-size-fits-all solutions. Every project is built from scratch with your unique requirements and brand identity in mind.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>How long does it take to develop a website or app?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Development timelines vary based on project complexity. A basic website might take 2-4 weeks, while complex web applications or mobile apps typically require 2-4 months. During our initial consultation, we'll provide a more accurate timeline based on your specific requirements.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>Do you provide digital marketing and SEO services?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Absolutely! We offer comprehensive digital marketing services including SEO, content marketing, social media management, PPC campaigns, and analytics. Our marketing strategies are data-driven and focused on delivering measurable results for your business.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>Do you offer website and app maintenance services?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Yes, we provide ongoing maintenance and support services to ensure your digital products remain secure, up-to-date, and performing optimally. Our maintenance packages include regular updates, security monitoring, performance optimization, and technical support.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>What industries do you serve?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>We serve various industries, including eCommerce, healthcare, education, real estate, travel, finance, and startups. Our diverse experience across sectors allows us to bring innovative solutions and industry-specific insights to your project.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>Do you integrate third-party APIs and payment gateways?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Yes, we have extensive experience integrating various third-party APIs, payment gateways, CRMs, marketing tools, and other business systems. We can seamlessly connect your website or app with any external service that offers an API.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>Will my website be optimized for mobile and SEO?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Absolutely! All our websites are fully responsive and mobile-friendly by default. We also implement on-page SEO best practices, including optimized code structure, fast loading times, proper meta tags, schema markup, and accessibility features to ensure your site ranks well in search engines.</p>
            </div>
          </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3>How do I get started with PixelKrafts?</h3>
              <span class="faq-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-answer">
              <p>Getting started is easy! Simply contact us through our website, email, or phone. We'll schedule an initial consultation to discuss your project requirements, goals, timeline, and budget. After understanding your needs, we'll provide a detailed proposal and once approved, we'll begin the development process.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main CTA Section -->
    <section class="section cta" id="cta">
      <div class="container">
        <div class="cta-content">
          <h2>Ready to Start Your Project?</h2>
          <p>Let's create something amazing together.</p>
          <div class="cta-buttons">
            <a href="/pknew/contact/" class="btn btn-primary">
              <i class="fas fa-rocket"></i> Start Your Project
            </a>
            <a href="https://wa.me/917579966178" class="btn btn-outline-light">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <?php
  include_once "./includes/footer.php";
  ?>

  <!-- WhatsApp Fixed Button -->
  <a href="https://wa.me/917579966178" class="whatsapp-btn" aria-label="Contact on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Back to Top Button -->
  <a href="#top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>

<script src="./assets/js/script.js"></script>
</body>
</html>