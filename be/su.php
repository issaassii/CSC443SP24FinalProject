<?php 
    session_start();
    if (!isset($_SESSION["email"])) {
        exit();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        include 'dbconnect.php';    
        $email = $_POST['signupemail'];
        $password = hash('sha256', $_POST['signuppassword']);
        $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            echo "Successfully added user.";
        } else {
            echo "Error adding user";
        }
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../cms/");
    }         
?> 