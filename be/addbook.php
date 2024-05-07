<?php 
    session_start();
    if (!isset($_SESSION["email"])) {
        exit();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        include 'dbconnect.php';    
        $book = $_POST['adminaddbook'];
        $description = $_POST['adminadddesc'];
        $sql = "INSERT INTO `books` (`book`, `description`, `is_active`) VALUES ('$book', '$description', '1')";
        $result = mysqli_query($conn, $sql);

        
        if($result) {
            echo "Successfully added book.";
        } else {
            echo "Error adding book";
        }
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../cms/");
    }         
?> 