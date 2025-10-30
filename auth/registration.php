<?php

// Start session
session_start();

?>

<!-- ------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pookie Sanda</title>
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
            <div class="form-card active" id="register-form">
                <h2 class="form-title">Create Account</h2>




                <!-- Input form -->
                <form action="manage.php" method="post">

                    <!-- Name Inpur fild -->
                    <div class="form-group">
                        <label for="register-name" class="form-label">Full Name</label>
                        <div class="input-with-icon">
                            <input type="text" class="form-control <?php if(isset($_SESSION['name_error'])){ echo "is-invalid"; } ?>" id="register-name" placeholder="Enter your full name" name="name" value="<?php if(isset($_SESSION['name_value'])){ echo $_SESSION['name_value'];; } unset($_SESSION['name_value']); ?>">
                            <i class="fas fa-user input-icon"></i>
                        </div>
                        <!-- Name Error Start -->
                            <?php if(isset($_SESSION['name_error'])){ ?>
                                <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION['name_error']; ?> </div>
                            <?php } unset($_SESSION['name_error']); ?>
                        <!-- Name Error END -->
                    </div>
                    



                            <!-- ---------------xxxxxxxxxxxxxxxxxxx--------------- -->



                     <!-- Email Inpur fild -->
                    <div class="form-group">
                        <label for="register-email" class="form-label">Email Address</label>
                        <div class="input-with-icon">
                            <input type="text" class="form-control <?php if(isset($_SESSION['email_error'])){ echo "is-invalid"; } ?>" id="register-email" placeholder="Enter your email" name="email" value="<?php if(isset($_SESSION['email_value'])){ echo $_SESSION['email_value'];; } unset($_SESSION['email_value']); ?>"> 
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        <!-- Email Error Start -->
                            <?php if(isset($_SESSION['email_error'])){ ?>
                                <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION['email_error']; ?> </div>
                            <?php } unset($_SESSION['email_error']); ?>
                        <!-- Email Error END -->
                    </div>
                     



                    <!-- ---------------xxxxxxxxxxxxxxxxxxx--------------- -->
                    


                    <div class="form-group">
                        <label for="register-password" class="form-label">Password</label>
                        <div class="input-with-icon">
                            <input type="password" class="form-control <?php if(isset($_SESSION['password_error'])){ echo "is-invalid"; } ?>" id="register-password" placeholder="Create a password" name="password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <!-- Password Error Start -->
                            <?php if(isset($_SESSION['password_error'])){ ?>
                                <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION['password_error']; ?> </div>
                            <?php } unset($_SESSION['password_error']); ?>
                        <!-- Password Error END -->
                    </div>

                    


                    <!-- ---------------xxxxxxxxxxxxxxxxxxx--------------- -->
                    


                    <div class="form-group">
                        <label for="register-confirm-password" class="form-label">Confirm Password</label>
                        <div class="input-with-icon">
                            <input type="password" class="form-control <?php if(isset($_SESSION['c_password_error'])){ echo "is-invalid"; } ?>" id="register-confirm-password" placeholder="Confirm your password" name="c_password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                         <!-- Password Error Start -->
                            <?php if(isset($_SESSION['c_password_error'])){ ?>
                                <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION['c_password_error']; ?> </div>
                            <?php } unset($_SESSION['c_password_error']); ?>
                        <!-- Password Error END -->
                    </div>
                    
                   

                    <!-- ---------------xxxxxxxxxxxxxxxxxxx--------------- -->



                    <div class="form-options">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agree-terms">
                            <label class="form-check-label" for="agree-terms">I agree to the <a href="#" class="forgot-password">Terms & Conditions</a></label>
                        </div>
                    </div>
                    
                    <button name="reg_btn" class="submit-btn">Create Account</button>
                    
                </form>

                <!-- Input Form End -->


                  <div class="divider">
                        <span>Or sign up with</span>
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
                        Already have an account? <a href="login.php" class="text-pink">Sign In</a>
                    </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/js/index.js"></script>
</body>
</html>





<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                            <h2 class="card-title text-white">Create Account</h2>
                            <p class="text-light">Sign up for a new account</p>
                        </div>
                        

       
                        <form action="manage.php" method="post">
                            <div class="mb-3">
                                <label for="fullName" class="form-label text-white">Full Name</label>
                                <input type="text" class="form-control custom-input <?php if(isset($_SESSION['name_error'])){ echo "is-invalid"; } ?>" id="fullName" placeholder="Enter your full name" name="name">
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email Address</label>
                                <input type="email" class="form-control custom-input" id="email" placeholder="Enter your email" name="email">
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" class="form-control custom-input" id="password" placeholder="Create a password" name="password">
                            </div>
                            
                            <div class="mb-4">
                                <label for="confirmPassword" class="form-label text-white">Confirm Password</label>
                                <input type="password" class="form-control custom-input" id="confirmPassword" placeholder="Confirm your password" name="c_password">
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms">
                                <label class="form-check-label text-white" for="terms">I agree to the <a href="#" class="text-pink">Terms and Conditions</a></label>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button name="reg_btn" class="btn custom-btn">Create Account</button>
                            </div>
                        </form>
        


                        <div class="text-center mt-4">
                            <p class="text-white">Already have an account? <a href="login.php" class="text-pink">Sign in</a></p>
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