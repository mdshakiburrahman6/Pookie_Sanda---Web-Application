<?php

// Database connection
include '../config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pookie Sanda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container-wrapper">
        <div class="logo">
            <h1>Pookie Sanda</h1>
            <p>Your gateway to exclusive content</p>
        </div>
        
        <div class="form-container">
            <div class="form-card active" id="login-form">
                <h2 class="form-title">Welcome Back</h2>

                <!-- User Login Form -->
                <form action="manage.php" method="post">

                    <div class="form-group">
                        <label for="login-email" class="form-label">Email Address</label>
                        <div class="input-with-icon">
                            <input type="text" class="form-control <?php if(isset($_SESSION['email_error'])){ echo "is-invalid"; } ?>" id="login-email" placeholder="Enter your email" name="email" value="<?php if(isset($_SESSION['email_value'])){ echo $_SESSION['email_value'];; } unset($_SESSION['email_value']); ?>">
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        <!-- Email Error Start -->
                            <?php if(isset($_SESSION['email_error'])){ ?>
                                <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION['email_error']; ?> </div>
                            <?php } unset($_SESSION['email_error']); ?>
                        <!-- Email Error END -->
                    </div>
                    
                    <div class="form-group">
                        <label for="login-password" class="form-label">Password</label>
                        <div class="input-with-icon">
                            <input type="password" class="form-control" id="login-password" placeholder="Enter your password" name="password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    
                    <button name="log_btn" class="submit-btn">Sign In</button>
                </form>
                <!-- User login form end -->


                                    
                    <div class="divider">
                        <span>Or continue with</span>
                    </div>
                    
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
                    
                    <div class="signup-link">
                        Don't have an account? <a href="registration.php" class="text-pink">Sign Up</a>
                    </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/js/index.js"></script>
</body>
</html>




<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card login-card">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="card-title text-white">Welcome Back</h2>
                            <p class="text-light">Sign in to your account</p>
                        </div>
                        
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email Address</label>
                                <input type="email" class="form-control custom-input" id="email" placeholder="Enter your email">
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control custom-input" id="password" placeholder="Enter your password">
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label text-white" for="remember">Remember me</label>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="button" class="btn custom-btn">Sign In</button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-4">
                            <a href="#" class="text-pink">Forgot your password?</a>
                            <p class="text-white mt-2">Don't have an account? <a href="registration.php" class="text-pink">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/js/index.js"></script>
</body>
</html> -->