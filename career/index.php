<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

<head>
  <link rel="stylesheet" href="../assets/css/career.css">
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
    <section class="section hero" id="career-hero">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Join Our Team</h1>
          <p class="hero-text">
            Be part of a dynamic team that's shaping the future of digital solutions. We're looking for passionate developers who want to make a difference.
          </p>
        </div>
      </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="section why-join">
      <div class="container">
        <span class="section-subtitle">Why PixelKrafts?</span>
        <h2 class="section-title">Why Work With Us</h2>
        
        <div class="benefits-grid">
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-rocket"></i>
            </div>
            <h3>Growth Opportunities</h3>
            <p>Continuous learning and career advancement in cutting-edge technologies.</p>
          </div>
          
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Collaborative Environment</h3>
            <p>Work with a passionate team of developers, designers, and strategists.</p>
          </div>
          
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3>Latest Technologies</h3>
            <p>Work with modern tech stack and innovative development practices.</p>
          </div>
          
          <div class="benefit-card">
            <div class="benefit-icon">
              <i class="fas fa-balance-scale"></i>
            </div>
            <h3>Work-Life Balance</h3>
            <p>Flexible working hours and remote work opportunities.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Open Positions Section -->
    <section class="section open-positions">
      <div class="container">
        <span class="section-subtitle">Current Openings</span>
        <h2 class="section-title">Open Positions</h2>
        
        <div class="jobs-grid">
          <!-- Flutter Developer Position -->
          <div class="job-card">
            <div class="job-header">
              <div class="job-icon">
                <i class="fa-solid fa-code"></i>
              </div>
              <div class="job-info">
                <h3 class="job-title">Flutter Developer</h3>
                <div class="job-meta">
                  <span class="job-type">Full-time</span>
                  <span class="job-location">Remote/Hybrid</span>
                  <span class="job-experience">2-4 years</span>
                </div>
              </div>
            </div>
            <p class="job-description">
              We're looking for a skilled Flutter developer to build beautiful, high-performance mobile applications for our clients.
            </p>
            <div class="job-skills">
              <span class="skill-tag">Flutter</span>
              <span class="skill-tag">Dart</span>
              <span class="skill-tag">Firebase</span>
              <span class="skill-tag">REST APIs</span>
            </div>
            <div class="job-actions">
              <a href="flutter-developer.php" class="btn btn-primary">View Details</a>
              <a href="#apply" class="btn btn-outline">Quick Apply</a>
            </div>
          </div>

          <!-- Backend Developer Position -->
          <div class="job-card">
            <div class="job-header">
              <div class="job-icon">
                <i class="fas fa-server"></i>
              </div>
              <div class="job-info">
                <h3 class="job-title">Backend Developer</h3>
                <div class="job-meta">
                  <span class="job-type">Full-time</span>
                  <span class="job-location">Remote/Hybrid</span>
                  <span class="job-experience">3-5 years</span>
                </div>
              </div>
            </div>
            <p class="job-description">
              Join our backend team to develop robust, scalable server-side applications and APIs that power our digital solutions.
            </p>
            <div class="job-skills">
              <span class="skill-tag">Node.js</span>
              <span class="skill-tag">PHP</span>
              <span class="skill-tag">MySQL</span>
              <span class="skill-tag">MongoDB</span>
              <span class="skill-tag">AWS</span>
            </div>
            <div class="job-actions">
              <a href="backend-developer.php" class="btn btn-primary">View Details</a>
              <a href="#apply" class="btn btn-outline">Quick Apply</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Application Section -->
    <section class="section application-section" id="apply">
      <div class="container">
        <span class="section-subtitle">Ready to Apply?</span>
        <h2 class="section-title">Send Us Your Application</h2>
        
        <div class="application-content">
          <div class="application-info">
            <h3>How to Apply</h3>
            <ul class="application-steps">
              <li>
                <i class="fas fa-file-alt"></i>
                <span>Prepare your resume and portfolio</span>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <span>Send your application to careers@pixelkrafts.in</span>
              </li>
              <li>
                <i class="fas fa-phone"></i>
                <span>We'll contact you within 48 hours</span>
              </li>
              <li>
                <i class="fas fa-handshake"></i>
                <span>Interview process and onboarding</span>
              </li>
            </ul>
            
            <div class="contact-info">
              <h4>Contact Information</h4>
              <p><i class="fas fa-envelope"></i> careers@pixelkrafts.in</p>
              <p><i class="fas fa-phone"></i> +91 7579966178</p>
              <p><i class="fab fa-whatsapp"></i> WhatsApp: +91 7579966178</p>
            </div>
          </div>
          
          <div class="quick-apply-form">
            <h3>Quick Application Form</h3>
            <form class="career-form" action="../includes/send-career-mail.php" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group">
                  <label for="name">Full Name *</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email Address *</label>
                  <input type="email" id="email" name="email" required>
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group">
                  <label for="phone">Phone Number *</label>
                  <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                  <label for="position">Position *</label>
                  <select id="position" name="position" required>
                    <option value="">Select Position</option>
                    <option value="flutter-developer">Flutter Developer</option>
                    <option value="backend-developer">Backend Developer</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label for="experience">Years of Experience *</label>
                <select id="experience" name="experience" required>
                  <option value="">Select Experience</option>
                  <option value="0-1">0-1 years</option>
                  <option value="1-3">1-3 years</option>
                  <option value="3-5">3-5 years</option>
                  <option value="5+">5+ years</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="resume">Upload Resume *</label>
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
              </div>
              
              <div class="form-group">
                <label for="portfolio">Portfolio URL (Optional)</label>
                <input type="url" id="portfolio" name="portfolio" placeholder="https://your-portfolio.com">
              </div>
              
              <div class="form-group">
                <label for="message">Cover Letter / Message *</label>
                <textarea id="message" name="message" rows="5" placeholder="Tell us why you'd be a great fit for this position..." required></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Submit Application
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
      <div class="container">
        <div class="cta-content">
          <h2>Don't See Your Role?</h2>
          <p>We're always looking for talented individuals. Send us your resume and we'll keep you in mind for future opportunities.</p>
          <div class="cta-buttons">
            <a href="mailto:careers@pixelkrafts.in" class="btn btn-primary">
              <i class="fas fa-envelope"></i> Send Resume
            </a>
            <a href="https://wa.me/917579966178" class="btn btn-outline-light">
              <i class="fab fa-whatsapp"></i> Chat with HR
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
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
