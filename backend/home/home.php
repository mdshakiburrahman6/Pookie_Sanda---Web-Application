<a href="../logout/logout.php">Log Out</a>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nexus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../frontend/assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="brand-gradient">Nexus</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="login.html">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Welcome to <span class="text-gradient">Nexus</span>
                        </h1>
                        <p class="hero-subtitle">
                            Your gateway to exclusive content and seamless digital experiences. 
                            Join thousands of users who trust Nexus for their daily needs.
                        </p>
                        <div class="hero-buttons">
                            <a href="registration.php" class="btn btn-primary me-3">
                                Get Started Free
                            </a>
                            <a href="#features" class="btn btn-outline">
                                Learn More
                            </a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <h3>10K+</h3>
                                <p>Active Users</p>
                            </div>
                            <div class="stat-item">
                                <h3>99.9%</h3>
                                <p>Uptime</p>
                            </div>
                            <div class="stat-item">
                                <h3>24/7</h3>
                                <p>Support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="glass-card">
                            <div class="card-content">
                                <div class="app-preview">
                                    <div class="app-header">
                                        <div class="app-dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="app-body">
                                        <div class="data-item">
                                            <i class="fas fa-chart-line"></i>
                                            <div>
                                                <h5>Analytics Dashboard</h5>
                                                <p>Real-time insights</p>
                                            </div>
                                        </div>
                                        <div class="data-item">
                                            <i class="fas fa-users"></i>
                                            <div>
                                                <h5>Team Collaboration</h5>
                                                <p>Work together seamlessly</p>
                                            </div>
                                        </div>
                                        <div class="data-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <div>
                                                <h5>Secure Storage</h5>
                                                <p>Your data is protected</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="section-header">
                <h2>Amazing Features</h2>
                <p>Discover what makes Nexus the perfect choice for you</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Lightning Fast</h3>
                        <p>Experience blazing fast performance with our optimized infrastructure and cutting-edge technology.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Secure & Safe</h3>
                        <p>Your data is protected with enterprise-grade security and end-to-end encryption.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Responsive Design</h3>
                        <p>Perfect experience on any device - desktop, tablet, or mobile phone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Why Choose Nexus?</h2>
                        <p>Nexus is built with modern technology and user experience in mind. We're committed to providing the best platform for our users.</p>
                        
                        <div class="about-features">
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Modern Technology Stack</span>
                            </div>
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>24/7 Customer Support</span>
                            </div>
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Regular Updates & Improvements</span>
                            </div>
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>User-Friendly Interface</span>
                            </div>
                        </div>
                        
                        <a href="registration.php" class="btn btn-primary mt-4">
                            Join Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <div class="floating-cards">
                            <div class="card card-1">
                                <i class="fas fa-rocket"></i>
                                <h4>Performance</h4>
                            </div>
                            <div class="card card-2">
                                <i class="fas fa-lock"></i>
                                <h4>Security</h4>
                            </div>
                            <div class="card card-3">
                                <i class="fas fa-heart"></i>
                                <h4>User Love</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Have questions? We'd love to hear from you</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <h3>Contact Information</h3>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <div>
                                            <h5>Email</h5>
                                            <p>support@nexus.com</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <div>
                                            <h5>Phone</h5>
                                            <p>+1 (555) 123-4567</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div>
                                            <h5>Address</h5>
                                            <p>123 Digital Street, Tech City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="contact-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary w-100">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-brand">
                        <h3 class="brand-gradient">Nexus</h3>
                        <p>Your gateway to exclusive content and digital experiences.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Legal</h5>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Nexus. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../frontend/assets/js/index.js"></script>
</body>
</html>