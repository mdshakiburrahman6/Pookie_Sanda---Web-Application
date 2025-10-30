<?php

// Database connection
include '../config/database.php';

// Start Session
session_start();


// For Registration Button process
if(isset($_POST['reg_btn'])){

    // Revice all frontend data with The super global veriable ($_POST)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $flag = false;


    // All Regex for validation
    $name_regex = '/^(?! $)[a-zA-Z ]*$/';
    $email_regex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    $password_regex_upper = '/^(?=.*?[A-Z])/';
    $password_regex_lower = '/^(?=.*?[a-z])/';
    $password_regex_numerical = '/^(?=.*?[0-9])/';
    $password_regex_length = '/^.{8,}/';
    $password_regex_special_char = '/^(?=.*?[#?!@$%^&*-])/';




    // ======== Seperated Form field Validation =========== //


    // Name Validation
    if(!$name){
        $flag = true;
        $_SESSION['name_error'] = "Name cannot be empty.";
        header('location: ./registration.php');
    }elseif(!preg_match($name_regex, $name)){
        $flag = true;
        $_SESSION['name_error'] = "Enter a valid name.";
        header('location: ./registration.php');
    }else{
        $_SESSION['name_value'] = $name;
        header('location: ./registration.php');
    }



    // Email Validation
    if(!$email){
        $flag = true;
        $_SESSION['email_error'] = "Email cannot be empty.";
        header('location: ./registration.php');
    }elseif(!preg_match($email_regex, $email)){
        $flag = true;
        $_SESSION['email_error'] = "Your email is not valid.";
        header('location: ./registration.php');
    }else{
        $_SESSION['email_value'] = $email;
        header('location: ./registration.php');
    }


    // Password Validation
      if(!$password){
        $flag = true;
        $_SESSION['password_error'] = "Enter your password";
        header('location: ./registration.php');
    }else if(!preg_match($password_regex_upper,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest one upper case";
        header('location: ./registration.php');
    }else if(!preg_match($password_regex_lower,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest one lower case";
        header('location: ./registration.php');
    }else if(!preg_match($password_regex_numerical,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest one numerical character";
        header('location: ./registration.php');
    }else if(!preg_match($password_regex_length,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest 8 character";
        header('location: ./registration.php');
    }else if(!preg_match($password_regex_special_char,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain a special character";
        header('location: ./registration.php');
    }


    // Confirm Password Validation
    if(!$c_password){
        $flag = true;
        $_SESSION['c_password_error'] = "Please enter your confirm password";
        header('location: ./registration.php');
    }else if($c_password != $password){
        $flag = true;
        $_SESSION['c_password_error'] = "Cridential doesn't match";
        header('location: ./registration.php');
    }



    // Database Connection
   if($flag == false){
        $encrypt = sha1($password);
        $querry =  "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$encrypt')";
        $result = mysqli_query($db, $querry);

        // After registration success
        $_SESSION['reg_success'] = "Your registration has been successfull.";
        header('location: login.php');
   }
}
// Registration Validation End

// ========================================================================================================================================== //


// Login Button Funtionality
if(isset($_POST['log_btn'])){

    // Revice all frontend data with The super global veriable ($_POST)
    $email = $_POST['email'];
    $password = $_POST['password'];
    $flag = false;


    // All Regex for validation
    $email_regex = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    $password_regex_upper = '/^(?=.*?[A-Z])/';
    $password_regex_lower = '/^(?=.*?[a-z])/';
    $password_regex_numerical = '/^(?=.*?[0-9])/';
    $password_regex_length = '/^.{8,}/';
    $password_regex_special_char = '/^(?=.*?[#?!@$%^&*-])/';


       // ======== Seperated Form field Validation =========== //


    // Email Validation - login
    if(!$email){
        $flag = true;
        $_SESSION['email_error'] = "Enter your email.";
        header('location: login.php');
    }elseif(!preg_match($email_regex, $email)){
        $flag = true;
        $_SESSION['email_error'] = "Enter your email.";
        header('location: login.php');
    }else{
         $_SESSION['email_value'] = $email;
        header('location: login.php');
    }


    // Password Validation - login
      if(!$password){
        $flag = true;
        $_SESSION['password_error'] = "Enter your password";
        header('location: ./login.php');
    }else if(!preg_match($password_regex_upper,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest one upper case";
        header('location: ./login.php');
    }else if(!preg_match($password_regex_lower,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest one lower case";
        header('location: ./login.php');
    }else if(!preg_match($password_regex_numerical,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest one numerical character";
        header('location: ./login.php');
    }else if(!preg_match($password_regex_length,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain atlest 8 character";
        header('location: ./login.php');
    }else if(!preg_match($password_regex_special_char,$password)){
        $flag = true;
        $_SESSION['password_error'] = "Password should contain a special character";
        header('location: ./login.php');
    }


    // IF the enter all valid information
        // Connect database + read data from data base + match data
        $encrypt = sha1($password);
        $querry = "SELECT COUNT(*) AS validate FROM users WHERE email='$email' AND password='$encrypt'";
        $connect = mysqli_query($db, $querry);
        $result = mysqli_fetch_assoc($connect);


        // If the email & pass are matched 
        if($result['validate'] == 1){
            $data_querry = "SELECT * FROM users WHERE email='$email'";
            $connect = mysqli_query($db, $data_querry);
            $author = mysqli_fetch_assoc($connect);


            $_SESSION['author_id'] = $author['id'];
            $_SESSION['author_name'] = $author['name'];
            $_SESSION['author_email'] = $author['email'];
            $_SESSION['author_password'] = $author['password'];


            header('location: ../backend/home/home.php');

        }

}


?>