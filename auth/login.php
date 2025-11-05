<?php
// Start session
session_start();

// Block logged in user
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
    <link rel="stylesheet" href="../frontend/assets2/css/style.css">

      <!-- Temes Fav Icon -->
    <link rel="shortcut icon" href="../public/assets/images/CPOOKIE SANDA .png" type="image/x-icon">

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
                <p class="form-subtitle">Welcome back to Pookie Sanda</p>

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
                                   placeholder="Enter your password" 
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
                    <span>Or sign in with</span>
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
                    Don't have an account? <a href="registration.php">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../frontend/assets2/js/index.js"></script>
</body>
</html>
