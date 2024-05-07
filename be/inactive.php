<?php 
    session_start();
    if (!isset($_SESSION["email"])) {
        exit();
    }
    include 'dbconnect.php';  
    $id = $_GET['id'];  
    $sql = "UPDATE `books` SET `is_active` = '0' WHERE `books`.`id` = $id;";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Success";
    } else {
        echo "Error";
    }
	header('Location: ../cms');
?> 