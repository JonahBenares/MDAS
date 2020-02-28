<?php 

$conn = mysqli_connect('localhost', 'root', '','db_mdas_test');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>