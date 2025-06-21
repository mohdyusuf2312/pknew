<!DOCTYPE html>
<html lang="en">
<?php
include_once "../includes/header.php";
?>

<head>
  <link rel="stylesheet" href="../assets/css/career.css">
  <title>Backend Developer - PixelKrafts Career</title>
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
            <i class="fas fa-server"></i>
          </div>
          <div class="job-detail-info">
            <h1 class="job-detail-title">Backend Developer</h1>
            <div class="job-detail-meta">
              <span class="job-type">Full-time</span>
              <span class="job-location">Remote/Hybrid</span>
              <span class="job-experience">3-5 years</span>
              <span class="job-salary">₹5-10 LPA</span>
            </div>
            <p class="job-detail-summary">
              Join our backend development team to build robust, scalable server-side applications and APIs that power our digital solutions. You'll work with modern technologies and contribute to high-impact projects.
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
                We're seeking an experienced Backend Developer to join our dynamic team. You'll be responsible for developing and maintaining server-side logic, databases, and APIs that support our web and mobile applications.
              </p>
              <p>
                As a Backend Developer at PixelKrafts, you'll work on diverse projects including e-commerce platforms, enterprise applications, and custom software solutions, collaborating with frontend developers, mobile developers, and DevOps engineers.
              </p>
            </div>

            <!-- Key Responsibilities -->
            <div class="job-section">
              <h2>Key Responsibilities</h2>
              <ul class="job-list">
                <li>Design and develop scalable backend systems and RESTful APIs</li>
                <li>Build and maintain database schemas and optimize database performance</li>
                <li>Implement authentication, authorization, and security best practices</li>
                <li>Integrate third-party services and payment gateways</li>
                <li>Write clean, maintainable, and well-documented code</li>
                <li>Perform code reviews and mentor junior developers</li>
                <li>Optimize application performance and troubleshoot issues</li>
                <li>Collaborate with frontend and mobile teams for seamless integration</li>
                <li>Deploy and maintain applications on cloud platforms</li>
                <li>Implement automated testing and CI/CD pipelines</li>
              </ul>
            </div>

            <!-- Required Skills -->
            <div class="job-section">
              <h2>Required Skills & Qualifications</h2>
              <ul class="job-list">
                <li>3-5 years of experience in backend development</li>
                <li>Strong proficiency in Node.js, PHP, or Python</li>
                <li>Experience with frameworks like Express.js, Laravel, or Django</li>
                <li>Solid understanding of database design (MySQL, PostgreSQL, MongoDB)</li>
                <li>Experience with RESTful API design and development</li>
                <li>Knowledge of authentication methods (JWT, OAuth, Session-based)</li>
                <li>Familiarity with cloud platforms (AWS, Google Cloud, Azure)</li>
                <li>Experience with version control systems (Git)</li>
                <li>Understanding of microservices architecture</li>
                <li>Knowledge of caching strategies (Redis, Memcached)</li>
                <li>Strong problem-solving and analytical skills</li>
                <li>Good communication and teamwork abilities</li>
              </ul>
            </div>

            <!-- Preferred Skills -->
            <div class="job-section">
              <h2>Preferred Skills (Nice to Have)</h2>
              <ul class="job-list">
                <li>Experience with containerization (Docker, Kubernetes)</li>
                <li>Knowledge of GraphQL and real-time technologies (WebSockets, Socket.io)</li>
                <li>Familiarity with message queues (RabbitMQ, Apache Kafka)</li>
                <li>Experience with serverless architectures (AWS Lambda, Vercel Functions)</li>
                <li>Knowledge of DevOps practices and CI/CD tools</li>
                <li>Understanding of monitoring and logging tools</li>
                <li>Experience with e-commerce platforms and payment integrations</li>
                <li>Familiarity with blockchain and cryptocurrency integrations</li>
                <li>Knowledge of machine learning and AI integration</li>
              </ul>
            </div>

            <!-- What We Offer -->
            <div class="job-section">
              <h2>What We Offer</h2>
              <ul class="job-list">
                <li>Competitive salary package (₹5-10 LPA based on experience)</li>
                <li>Flexible working hours and remote work options</li>
                <li>Health insurance and wellness benefits</li>
                <li>Professional development opportunities and training</li>
                <li>Access to latest development tools and technologies</li>
                <li>Collaborative and innovative work environment</li>
                <li>Opportunity to work on cutting-edge projects</li>
                <li>Performance-based bonuses and career advancement</li>
                <li>Conference attendance and learning budget</li>
              </ul>
            </div>
          </div>

          <!-- Job Sidebar -->
          <div class="job-sidebar">
            <!-- Quick Apply -->
            <div class="sidebar-card">
              <h3>Quick Apply</h3>
              <p>Ready to join our backend team? Apply now and we'll review your application within 48 hours.</p>
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
                <strong>Position:</strong> Backend Developer
              </div>
              <div class="job-summary-item">
                <strong>Experience:</strong> 3-5 years
              </div>
              <div class="job-summary-item">
                <strong>Location:</strong> Remote/Hybrid
              </div>
              <div class="job-summary-item">
                <strong>Salary:</strong> ₹5-10 LPA
              </div>
              <div class="job-summary-item">
                <strong>Type:</strong> Full-time
              </div>
              <div class="job-summary-item">
                <strong>Posted:</strong> 1 day ago
              </div>
            </div>

            <!-- Skills Required -->
            <div class="sidebar-card">
              <h3>Key Skills</h3>
              <div class="skills-tags">
                <span class="skill-tag">Node.js</span>
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">MySQL</span>
                <span class="skill-tag">MongoDB</span>
                <span class="skill-tag">REST APIs</span>
                <span class="skill-tag">AWS</span>
                <span class="skill-tag">Docker</span>
                <span class="skill-tag">Git</span>
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
          <h2>Apply for Backend Developer Position</h2>
          <p>Fill out the form below and we'll review your application within 48 hours.</p>
        </div>
        
        <div class="application-form-wrapper">
          <form class="career-form" action="../includes/send-career-mail.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="position" value="backend-developer">
            
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
                  <option value="1-3">1-3 years</option>
                  <option value="3-5">3-5 years</option>
                  <option value="5-7">5-7 years</option>
                  <option value="7+">7+ years</option>
                </select>
              </div>
            </div>
            
            <div class="form-group">
              <label for="resume">Upload Resume *</label>
              <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            </div>
            
            <div class="form-group">
              <label for="portfolio">Portfolio/GitHub URL *</label>
              <input type="url" id="portfolio" name="portfolio" placeholder="https://github.com/yourusername" required>
            </div>
            
            <div class="form-group">
              <label for="tech-stack">Primary Tech Stack *</label>
              <select id="tech-stack" name="tech_stack" required>
                <option value="">Select Primary Stack</option>
                <option value="node-js">Node.js + Express</option>
                <option value="php-laravel">PHP + Laravel</option>
                <option value="python-django">Python + Django</option>
                <option value="python-flask">Python + Flask</option>
                <option value="other">Other (specify in message)</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="message">Cover Letter / Tell us about your backend experience *</label>
              <textarea id="message" name="message" rows="5" placeholder="Tell us about your backend development experience, projects you've worked on, and why you'd be a great fit for this position..." required></textarea>
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
                <i class="fab fa-flutter"></i>
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
              Build beautiful, high-performance mobile applications using Flutter and Dart.
            </p>
            <div class="job-actions">
              <a href="flutter-developer.php" class="btn btn-primary">View Details</a>
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
