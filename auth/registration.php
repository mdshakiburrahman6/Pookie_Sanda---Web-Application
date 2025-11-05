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
    <title>Register - Pookie Sanda</title>
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
                <h2 class="form-title">Create Account</h2>
                <p class="form-subtitle">Join thousands of users today</p>

                <form action="manage.php" method="post">
                    <!-- Name Input -->
                    <div class="form-group">
                        <label for="register-name" class="form-label">Full Name</label>
                        <div class="input-with-icon">
                            <input type="text" 
                                   class="form-control <?php if(isset($_SESSION['name_error'])){ echo 'is-invalid'; } ?>" 
                                   id="register-name" 
                                   placeholder="Enter your full name" 
                                   name="name" 
                                   value="<?php if(isset($_SESSION['name_value'])){ echo $_SESSION['name_value']; } unset($_SESSION['name_value']); ?>">
                            <i class="fas fa-user input-icon"></i>
                        </div>
                        <?php if(isset($_SESSION['name_error'])){ ?>
                            <div class="text-danger"><?php echo $_SESSION['name_error']; ?></div>
                        <?php } unset($_SESSION['name_error']); ?>
                    </div>

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

                    <!-- Confirm Password Input -->
                    <div class="form-group">
                        <label for="register-confirm-password" class="form-label">Confirm Password</label>
                        <div class="input-with-icon">
                            <input type="password" 
                                   class="form-control <?php if(isset($_SESSION['c_password_error'])){ echo 'is-invalid'; } ?>" 
                                   id="register-confirm-password" 
                                   placeholder="Confirm your password" 
                                   name="c_password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <?php if(isset($_SESSION['c_password_error'])){ ?>
                            <div class="text-danger"><?php echo $_SESSION['c_password_error']; ?></div>
                        <?php } unset($_SESSION['c_password_error']); ?>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="form-options">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agree-terms">
                            <label class="form-check-label" for="agree-terms">
                                I agree to the <a href="#">Terms & Conditions</a>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" name="reg_btn" class="submit-btn">
                        Create Account
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
                    Already have an account? <a href="login.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../frontend/assets2/js/index.js"></script>
</body>
</html>
