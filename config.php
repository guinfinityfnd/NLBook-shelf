<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'feebackdb';

    $conn = mysqli_connect($hostname,$username,$password,$database);
    $db = mysqli_select_db($conn,$database);
    if (!$db) {
        echo "Error :" . mysqli_connect_error($conn);
    }
?>