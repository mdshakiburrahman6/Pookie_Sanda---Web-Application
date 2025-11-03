<?php
// Start session
session_start();

// Block logined in  user
if(isset($_SESSION['author_id'])){
    header('location: ../backend/home/home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pookie Sanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-pink: #ff1493;
            --light-pink: #ff69b4;
            --dark-bg: #0f0f23;
            --card-bg: rgba(30, 30, 30, 0.8);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f0f23 0%, #1a0b2e 50%, #2d1435 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Particle Container */
        #particle-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .hover-particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            animation: float-particle 5s ease-out forwards;
        }

        @keyframes float-particle {
            0% {
                opacity: 0;
                transform: translateY(0) scale(0) rotate(0deg);
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                opacity: 0;
                transform: translateY(-100vh) scale(1.5) rotate(360deg);
            }
        }

        /* Animated Background Shapes */
        .bg-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: float-shape 20s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            background: var(--primary-pink);
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 400px;
            height: 400px;
            background: var(--light-pink);
            bottom: 10%;
            right: 10%;
            animation-delay: 5s;
        }

        .shape:nth-child(3) {
            width: 250px;
            height: 250px;
            background: #8338ec;
            top: 50%;
            left: 50%;
            animation-delay: 10s;
        }

        @keyframes float-shape {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(50px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-50px, 50px) scale(0.9);
            }
        }

        /* Main Container */
        .container-wrapper {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .main-content {
            width: 100%;
            max-width: 1200px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* Logo Section */
        .logo-section {
            text-align: center;
        }

        .logo-section img {
            width: 70%;
            max-width: 300px;
            margin-bottom: 30px;
            filter: drop-shadow(0 10px 30px rgba(255, 20, 147, 0.3));
            animation: float-logo 3s ease-in-out infinite;
        }

        @keyframes float-logo {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .logo-section h1 {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(45deg, var(--primary-pink), var(--light-pink));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 15px;
        }

        .logo-section p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .feature-list {
            text-align: left;
            display: inline-block;
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.8);
        }

        .feature-item i {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--primary-pink), var(--light-pink));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        /* Form Container */
        .form-container {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 35px 35px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .form-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 8px;
            text-align: center;
        }

        .form-subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 25px;
            font-size: 0.95rem;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
        }

        .input-with-icon {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 14px 45px 14px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--light-pink);
            box-shadow: 0 0 20px rgba(255, 105, 180, 0.2);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .input-icon {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.4);
            transition: all 0.3s ease;
        }

        .form-control:focus + .input-icon {
            color: var(--light-pink);
        }

        .text-danger {
            color: #ff4d6d !important;
            font-size: 0.875rem;
            margin-top: 5px;
        }

        /* Form Options */
        .form-options {
            margin-bottom: 25px;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .form-check-label {
            color: rgba(255, 255, 255, 0.8);
            cursor: pointer;
        }

        .form-check-label a {
            color: var(--light-pink);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .form-check-label a:hover {
            color: var(--primary-pink);
            text-decoration: underline;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, var(--primary-pink), var(--light-pink));
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 25px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 20, 147, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Divider */
        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .divider span {
            color: rgba(255, 255, 255, 0.5);
            background: var(--card-bg);
            padding: 0 15px;
            position: relative;
            z-index: 1;
        }

        /* Social Login */
        .social-login {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-bottom: 25px;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-btn:hover {
            background: linear-gradient(45deg, var(--primary-pink), var(--light-pink));
            border-color: transparent;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.3);
        }

        /* Signup Link */
        .signup-link {
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
        }

        .signup-link a {
            color: var(--light-pink);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .signup-link a:hover {
            color: var(--primary-pink);
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .logo-section {
                order: 1;
            }

            .form-container {
                order: 2;
                padding: 40px 30px;
            }

            .logo-section h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .form-container {
                padding: 30px 20px;
            }

            .logo-section h1 {
                font-size: 2rem;
            }

            .form-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Background Shapes -->
    <div class="bg-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Particle Container -->
    <div id="particle-container"></div>

    <!-- Main Content -->
    <div class="container-wrapper">
        <div class="main-content">
            <!-- Logo Section -->
            <div class="logo-section">
                <img src="../public/assets/images/CPOOKIE SANDA .png" alt="Pookie Sanda Logo">
                <h1>Pookie Sanda</h1>
                <p>Your gateway to exclusive content</p>
                
                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Secure & Private</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-bolt"></i>
                        <span>Lightning Fast</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-star"></i>
                        <span>Premium Features</span>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="form-container">
                <h2 class="form-title">Login your Account</h2>
                <p class="form-subtitle">Join thousands of users today</p>

                <form action="manage.php" method="post">

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="register-email" class="form-label">Email Address</label>
                        <div class="input-with-icon">
                            <input type="text" 
                                   class="form-control <?php if(isset($_SESSION['email_error'])){ echo 'is-invalid'; } ?>" 
                                   id="register-email" 
                                   placeholder="Enter your email" 
                                   name="email" 
                                   value="<?php if(isset($_SESSION['email_value'])){ echo $_SESSION['email_value']; } unset($_SESSION['email_value']); ?>">
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        <?php if(isset($_SESSION['email_error'])){ ?>
                            <div class="text-danger"><?php echo $_SESSION['email_error']; ?></div>
                        <?php } unset($_SESSION['email_error']); ?>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="register-password" class="form-label">Password</label>
                        <div class="input-with-icon">
                            <input type="password" 
                                   class="form-control <?php if(isset($_SESSION['password_error'])){ echo 'is-invalid'; } ?>" 
                                   id="register-password" 
                                   placeholder="Create a password" 
                                   name="password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <?php if(isset($_SESSION['password_error'])){ ?>
                            <div class="text-danger"><?php echo $_SESSION['password_error']; ?></div>
                        <?php } unset($_SESSION['password_error']); ?>
                    </div>


                    <!-- Remember Checkbox -->
                    <div class="form-options" style="display: flex; justify-content: space-between;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">Remember me</label>
                        </div>
                        <div>
                        <a style="text-decoration: none; color:#FF279B;" href="#" class="forgot-password">Forgot Password?</a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" name="log_btn" class="submit-btn">
                        Log in
                    </button>
                </form>

                <!-- Divider -->
                <div class="divider">
                    <span>Or sign up with</span>
                </div>

                <!-- Social Login -->
                <div class="social-login">
                    <button type="button" class="social-btn">
                        <i class="fab fa-google"></i>
                    </button>
                    <button type="button" class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="social-btn">
                        <i class="fab fa-twitter"></i>
                    </button>
                </div>

                <!-- Signup Link -->
                <div class="signup-link">
                    Already have an account? <a href="registration.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Particle System on Hover
        const particleContainer = document.getElementById('particle-container');
        let lastSpawn = 0;
        const spawnDelay = 50;
        
        const colors = ['#ff1493', '#ff69b4', '#ff6b9d', '#c71585', '#8338ec', '#3a86ff'];

        document.addEventListener('mousemove', (e) => {
            const now = Date.now();
            if (now - lastSpawn < spawnDelay) return;
            lastSpawn = now;

            const particle = document.createElement('div');
            particle.className = 'hover-particle';
            particle.style.left = e.clientX + 'px';
            particle.style.top = e.clientY + 'px';
            particle.style.width = Math.random() * 12 + 6 + 'px';
            particle.style.height = particle.style.width;
            particle.style.background = colors[Math.floor(Math.random() * colors.length)];
            particle.style.animationDuration = Math.random() * 2 + 3 + 's';

            particleContainer.appendChild(particle);

            setTimeout(() => {
                particle.remove();
            }, 5000);
        });

        // Form animations
        document.querySelectorAll('.form-group').forEach((group, index) => {
            group.style.opacity = '0';
            group.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                group.style.transition = 'all 0.5s ease';
                group.style.opacity = '1';
                group.style.transform = 'translateY(0)';
            }, 100 * index);
        });
    </script>
</body>
</html>