<?php 
// Connect to Database
$conn = mysqli_connect('localhost', 'admin', 'P@ssw0rd', 'pizza_time');

// Check the connection
if(!$conn){
    echo 'Connection Error: '.mysqli_connect_error();
} 
?>