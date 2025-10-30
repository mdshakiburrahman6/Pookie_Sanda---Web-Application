<?php

// Database connection
$db = mysqli_connect('localhost', 'root', '', 'pookie_sanda');


// For database error
if(!$db){
    header('location: ../error/error.php');
}

?>