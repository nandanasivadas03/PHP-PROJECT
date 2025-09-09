<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = "mystore";
 //create connection
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
 //echo "connected successfully";
 if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
 }
?>


    