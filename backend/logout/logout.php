<?php

// Start Session
session_start();

// Unset the session for logout
session_unset();

// Send back to login page
header('location: ../../auth/login.php');

?>