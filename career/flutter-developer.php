<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

<head>
  <link rel="stylesheet" href="../assets/css/career.css">
  <title>Flutter Developer - PixelKrafts Career</title>
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
    <!-- Job Header Section -->
    <section class="section job-detail-hero">
      <div class="container">
        <div class="job-detail-header">
          <div class="job-detail-icon">
            <i class="fa-solid fa-code"></i>
          </div>
          <div class="job-detail-info">
            <h1 class="job-detail-title">Flutter Developer</h1>
            <div class="job-detail-meta">
              <span class="job-type">Full-time</span>
              <span class="job-location">Remote/Hybrid</span>
              <span class="job-experience">2-4 years</span>
              <span class="job-salary">₹4-8 LPA</span>
            </div>
            <p class="job-detail-summary">
              Join our mobile development team to create beautiful, high-performance cross-platform applications using Flutter. You'll work on exciting projects for diverse clients while collaborating with our design and backend teams.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Job Details Section -->
    <section class="section job-details">
      <div class="container">
        <div class="job-details-grid">
          <div class="job-main-content">
            <!-- Job Description -->
            <div class="job-section">
              <h2>Job Description</h2>
              <p>
                We're looking for a passionate Flutter Developer to join our growing team. You'll be responsible for developing and maintaining mobile applications that deliver exceptional user experiences across iOS and Android platforms.
              </p>
              <p>
                As a Flutter Developer at PixelKrafts, you'll work on diverse projects ranging from e-commerce apps to enterprise solutions, collaborating closely with our UI/UX designers and backend developers to bring innovative ideas to life.
              </p>
            </div>

            <!-- Key Responsibilities -->
            <div class="job-section">
              <h2>Key Responsibilities</h2>
              <ul class="job-list">
                <li>Develop and maintain high-quality Flutter applications for iOS and Android</li>
                <li>Collaborate with cross-functional teams to define, design, and ship new features</li>
                <li>Write clean, maintainable, and efficient code following best practices</li>
                <li>Integrate with RESTful APIs and third-party services</li>
                <li>Implement responsive UI designs and ensure optimal performance</li>
                <li>Debug and resolve technical issues across different devices and platforms</li>
                <li>Participate in code reviews and contribute to team knowledge sharing</li>
                <li>Stay updated with the latest Flutter and mobile development trends</li>
              </ul>
            </div>

            <!-- Required Skills -->
            <div class="job-section">
              <h2>Required Skills & Qualifications</h2>
              <ul class="job-list">
                <li>2-4 years of experience in mobile app development</li>
                <li>Strong proficiency in Flutter and Dart programming language</li>
                <li>Experience with state management solutions (Provider, Bloc, Riverpod)</li>
                <li>Knowledge of RESTful APIs and JSON data handling</li>
                <li>Familiarity with Firebase services (Authentication, Firestore, Cloud Functions)</li>
                <li>Understanding of mobile app architecture patterns (MVC, MVP, MVVM)</li>
                <li>Experience with version control systems (Git)</li>
                <li>Knowledge of app store deployment processes (Google Play Store, Apple App Store)</li>
                <li>Strong problem-solving and debugging skills</li>
                <li>Good communication and teamwork abilities</li>
              </ul>
            </div>

            <!-- Preferred Skills -->
            <div class="job-section">
              <h2>Preferred Skills (Nice to Have)</h2>
              <ul class="job-list">
                <li>Experience with native Android (Kotlin/Java) or iOS (Swift) development</li>
                <li>Knowledge of CI/CD pipelines and automated testing</li>
                <li>Familiarity with backend technologies (Node.js, PHP, Python)</li>
                <li>Experience with payment gateway integrations</li>
                <li>Knowledge of push notifications and real-time features</li>
                <li>Understanding of app performance optimization techniques</li>
                <li>Experience with GraphQL APIs</li>
                <li>Familiarity with design tools (Figma, Adobe XD)</li>
              </ul>
            </div>

            <!-- What We Offer -->
            <div class="job-section">
              <h2>What We Offer</h2>
              <ul class="job-list">
                <li>Competitive salary package (₹4-8 LPA based on experience)</li>
                <li>Flexible working hours and remote work options</li>
                <li>Health insurance and wellness benefits</li>
                <li>Professional development opportunities and training</li>
                <li>Modern development tools and equipment</li>
                <li>Collaborative and innovative work environment</li>
                <li>Opportunity to work on diverse and challenging projects</li>
                <li>Performance-based bonuses and career growth opportunities</li>
              </ul>
            </div>
          </div>

          <!-- Job Sidebar -->
          <div class="job-sidebar">
            <!-- Quick Apply -->
            <div class="sidebar-card">
              <h3>Quick Apply</h3>
              <p>Ready to join our team? Apply now and we'll get back to you within 48 hours.</p>
              <a href="#apply-form" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Apply Now
              </a>
              <a href="mailto:careers@pixelkrafts.in" class="btn btn-outline">
                <i class="fas fa-envelope"></i> Email Resume
              </a>
            </div>

            <!-- Job Requirements Summary -->
            <div class="sidebar-card">
              <h3>Job Summary</h3>
              <div class="job-summary-item">
                <strong>Position:</strong> Flutter Developer
              </div>
              <div class="job-summary-item">
                <strong>Experience:</strong> 2-4 years
              </div>
              <div class="job-summary-item">
                <strong>Location:</strong> Remote/Hybrid
              </div>
              <div class="job-summary-item">
                <strong>Salary:</strong> ₹4-8 LPA
              </div>
              <div class="job-summary-item">
                <strong>Type:</strong> Full-time
              </div>
              <div class="job-summary-item">
                <strong>Posted:</strong> 2 days ago
              </div>
            </div>

            <!-- Skills Required -->
            <div class="sidebar-card">
              <h3>Key Skills</h3>
              <div class="skills-tags">
                <span class="skill-tag">Flutter</span>
                <span class="skill-tag">Dart</span>
                <span class="skill-tag">Firebase</span>
                <span class="skill-tag">REST APIs</span>
                <span class="skill-tag">State Management</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Mobile UI/UX</span>
                <span class="skill-tag">JSON</span>
              </div>
            </div>

            <!-- Contact Info -->
            <div class="sidebar-card">
              <h3>Contact HR</h3>
              <p>Have questions about this position? Get in touch with our HR team.</p>
              <div class="contact-methods">
                <a href="mailto:careers@pixelkrafts.in" class="contact-method">
                  <i class="fas fa-envelope"></i>
                  <span>careers@pixelkrafts.in</span>
                </a>
                <a href="https://wa.me/917579966178" class="contact-method">
                  <i class="fab fa-whatsapp"></i>
                  <span>+91 7579966178</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Application Form Section -->
    <section class="section application-form-section" id="apply-form">
      <div class="container">
        <div class="application-form-header">
          <h2>Apply for Flutter Developer Position</h2>
          <p>Fill out the form below and we'll review your application within 48 hours.</p>
        </div>
        
        <div class="application-form-wrapper">
          <form class="career-form" action="../includes/send-career-mail.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="position" value="flutter-developer">
            
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
                <label for="experience">Years of Experience *</label>
                <select id="experience" name="experience" required>
                  <option value="">Select Experience</option>
                  <option value="0-1">0-1 years</option>
                  <option value="1-3">1-3 years</option>
                  <option value="3-5">3-5 years</option>
                  <option value="5+">5+ years</option>
                </select>
              </div>
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
              <label for="github">GitHub Profile (Optional)</label>
              <input type="url" id="github" name="github" placeholder="https://github.com/yourusername">
            </div>
            
            <div class="form-group">
              <label for="message">Cover Letter / Why do you want to join PixelKrafts? *</label>
              <textarea id="message" name="message" rows="5" placeholder="Tell us about your Flutter experience and why you'd be a great fit for this position..." required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-paper-plane"></i> Submit Application
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- Related Jobs -->
    <section class="section related-jobs">
      <div class="container">
        <h2 class="section-title">Other Open Positions</h2>
        <div class="related-jobs-grid">
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
              Join our backend team to develop robust, scalable server-side applications and APIs.
            </p>
            <div class="job-actions">
              <a href="backend-developer.php" class="btn btn-primary">View Details</a>
            </div>
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
