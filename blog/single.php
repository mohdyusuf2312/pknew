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
    <!-- Hero Section for Blog Post Title -->
    <section class="section hero" id="blog-single-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">[Blog Post Title]</h1>
          <p class="hero-text">
            <span class="post-author">By Admin</span> | <span class="post-date">March 15, 2024</span> | <span class="post-category">[Category]</span>
          </p>
        </div>
      </div>
    </section>

    <!-- Blog Post Content Section -->
    <section class="section blog-post-content">
      <div class="container">
        <div class="post-image featured-image">
          <img src="/pknew/assets/images/blog-1.jpg" alt="[Blog Post Title]">
        </div>
        <div class="post-body">
          <h2>Section Title Example</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          
          <h3>Another Subsection</h3>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
          </p>
          
          <ul>
            <li>List item one</li>
            <li>List item two</li>
            <li>List item three</li>
          </ul>
          
          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollit anim id est laborum et dolorum fuga.
          </p>

          <!-- Placeholder for more content or dynamic loading -->
        </div>
      </div>
    </section>

    <!-- Author Section -->
    <section class="section post-author-section animate-on-scroll">
        <div class="container">
            <div class="author-card">
                <div class="author-avatar">
                    <img src="/pknew/assets/images/blog-1.jpg" alt="Author Name">
                </div>
                <div class="author-info">
                    <h3>About the Author</h3>
                    <h4>[Author Name]</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="author-social">
                         <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                         <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comments Section -->
    <section class="section comments-section animate-on-scroll">
        <div class="container">
            <h2 class="section-title">Comments</h2>
            <div class="comments-list">
                <!-- Placeholder Comment -->
                <div class="comment-item">
                    <div class="comment-avatar">
                        <img src="/pknew/assets/images/blog-1.jpg" alt="User Name">
                    </div>
                    <div class="comment-content">
                        <div class="comment-meta">
                            <span class="comment-author">User Name</span>
                            <span class="comment-date">March 16, 2024</span>
                        </div>
                        <p>This is a placeholder comment. Great post!</p>
                    </div>
                </div>
                <!-- Add more comments as needed -->
            </div>

            <div class="comment-form">
                <h3>Leave a Reply</h3>
                <form>
                    <div class="form-group">
                        <label for="comment-name">Name</label>
                        <input type="text" id="comment-name" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-email">Email</label>
                        <input type="email" id="comment-email" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-website">Website (Optional)</label>
                        <input type="url" id="comment-website">
                    </div>
                    <div class="form-group">
                        <label for="comment-message">Comment</label>
                        <textarea id="comment-message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Related Posts Section (Optional) -->
    <section class="section related-posts animate-on-scroll">
        <div class="container">
             <span class="section-subtitle">More Insights</span>
            <h2 class="section-title">Related Posts</h2>
            <div class="grid-list">
                <!-- Placeholder for related blog cards -->
                 <div class="blog-card">
                    <div class="card-image">
                      <img src="/pknew/assets/images/blog-1.jpg" alt="Related Post Title">
                    </div>
                    <div class="card-content">
                      <div class="post-meta">
                        <span class="post-category">Category</span>
                        <span class="post-date">Date</span>
                      </div>
                      <h3>Related Post Title</h3>
                      <p>Short excerpt of the related post content.</p>
                      <a href="#" class="btn-text">Read More</a>
                    </div>
                  </div>
                   <div class="blog-card">
                    <div class="card-image">
                      <img src="/pknew/assets/images/blog-1.jpg" alt="Related Post Title">
                    </div>
                    <div class="card-content">
                      <div class="post-meta">
                        <span class="post-category">Category</span>
                        <span class="post-date">Date</span>
                      </div>
                      <h3>Related Post Title</h3>
                      <p>Short excerpt of the related post content.</p>
                      <a href="#" class="btn-text">Read More</a>
                    </div>
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