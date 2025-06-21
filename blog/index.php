<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

<head>
  <link rel="stylesheet" href="../assets/css/blog.css">
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
    <section class="section pk-blog-hero" id="blog-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Our Blog</h1>
          <p class="hero-text">
            Insights, trends, and best practices in web development, digital marketing, and technology.
          </p>
        </div>
      </div>
    </section>

    <!-- Blog Categories Section -->
    <section class="section pk-blog-categories">
      <div class="container">
        <div class="pk-category-buttons">
          <button class="pk-category-btn active" data-category="all">All Posts</button>
          <button class="pk-category-btn" data-category="web">Web Development</button>
          <button class="pk-category-btn" data-category="marketing">Digital Marketing</button>
          <button class="pk-category-btn" data-category="design">UI/UX Design</button>
          <button class="pk-category-btn" data-category="tech">Technology</button>
        </div>
      </div>
    </section>

    <!-- Featured Post Section -->
    <section class="section pk-featured-post animate-on-scroll">
      <div class="container">
        <div class="pk-featured-card">
          <div class="pk-featured-image">
            <img src="/pknew/assets/images/blog-1.jpg" alt="Featured Post">
          </div>
          <div class="pk-featured-content">
            <div class="pk-post-meta">
              <span class="pk-post-category">Web Development</span>
              <span class="pk-post-date">March 15, 2024</span>
            </div>
            <h2 class="pk-post-title">The Future of Web Development: Trends to Watch in 2024</h2>
            <p class="pk-post-excerpt">
              Explore the latest trends shaping the future of web development, from AI integration to advanced frameworks and tools.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="section pk-blog-grid">
      <div class="container">
        <div class="pk-blog-list">
          <!-- Post 1 -->
          <article class="pk-blog-card animate-on-scroll" data-category="marketing">
            <div class="pk-blog-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="SEO Best Practices">
            </div>
            <div class="pk-blog-content">
              <div class="pk-post-meta">
                <span class="pk-post-category">Digital Marketing</span>
                <span class="pk-post-date">March 10, 2024</span>
              </div>
              <h3 class="pk-blog-title">SEO Best Practices for 2024</h3>
              <p class="pk-blog-excerpt">Learn the latest SEO strategies to improve your website's visibility and ranking.</p>
              <a href="single.php" class="pk-read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Post 2 -->
          <article class="pk-blog-card animate-on-scroll" data-category="design">
            <div class="pk-blog-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="UI Design Trends">
            </div>
            <div class="pk-blog-content">
              <div class="pk-post-meta">
                <span class="pk-post-category">UI/UX Design</span>
                <span class="pk-post-date">March 8, 2024</span>
              </div>
              <h3 class="pk-blog-title">UI Design Trends That Will Dominate 2024</h3>
              <p class="pk-blog-excerpt">Discover the most influential UI design trends that will shape digital experiences.</p>
              <a href="single.php" class="pk-read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Post 3 -->
          <article class="pk-blog-card animate-on-scroll" data-category="tech">
            <div class="pk-blog-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="AI in Development">
            </div>
            <div class="pk-blog-content">
              <div class="pk-post-meta">
                <span class="pk-post-category">Technology</span>
                <span class="pk-post-date">March 5, 2024</span>
              </div>
              <h3 class="pk-blog-title">How AI is Transforming Web Development</h3>
              <p class="pk-blog-excerpt">Explore the impact of artificial intelligence on modern web development practices.</p>
              <a href="single.php" class="pk-read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Post 4 -->
          <article class="pk-blog-card animate-on-scroll" data-category="web">
            <div class="pk-blog-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="Web Performance">
            </div>
            <div class="pk-blog-content">
              <div class="pk-post-meta">
                <span class="pk-post-category">Web Development</span>
                <span class="pk-post-date">March 3, 2024</span>
              </div>
              <h3 class="pk-blog-title">Optimizing Web Performance in 2024</h3>
              <p class="pk-blog-excerpt">Essential tips and techniques for improving your website's speed and performance.</p>
              <a href="single.php" class="pk-read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Post 5 -->
          <article class="pk-blog-card animate-on-scroll" data-category="marketing">
            <div class="pk-blog-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="Social Media Strategy">
            </div>
            <div class="pk-blog-content">
              <div class="pk-post-meta">
                <span class="pk-post-category">Digital Marketing</span>
                <span class="pk-post-date">March 1, 2024</span>
              </div>
              <h3 class="pk-blog-title">Creating an Effective Social Media Strategy</h3>
              <p class="pk-blog-excerpt">Learn how to build and execute a successful social media marketing strategy.</p>
              <a href="single.php" class="pk-read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Post 6 -->
          <article class="pk-blog-card animate-on-scroll" data-category="design">
            <div class="pk-blog-image">
              <img src="/pknew/assets/images/blog-1.jpg" alt="UX Research">
            </div>
            <div class="pk-blog-content">
              <div class="pk-post-meta">
                <span class="pk-post-category">UI/UX Design</span>
                <span class="pk-post-date">February 28, 2024</span>
              </div>
              <h3 class="pk-blog-title">The Importance of UX Research in Design</h3>
              <p class="pk-blog-excerpt">Understanding how user research shapes better digital experiences.</p>
              <a href="single.php" class="pk-read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="section pk-newsletter animate-on-scroll">
      <div class="container">
        <div class="pk-newsletter-content">
          <h2 class="pk-newsletter-title">Subscribe to Our Newsletter</h2>
          <p class="pk-newsletter-text">Get the latest insights and updates delivered to your inbox.</p>
          <form class="pk-newsletter-form">
            <input type="email" class="pk-newsletter-input" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta" id="cta">
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
  <script src="../assets/js/blog.js"></script>
</body>
</html> 