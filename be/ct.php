<?php 
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        include 'dbconnect.php';    
        $email = $_POST['contactemail'];
        $tel = $_POST['contactphone'];
        $subject = $_POST['contactsubject'];
        $body = $_POST['contactmessage'];
        $sql = "INSERT INTO `contacts` (`phone`, `email`, `subject`, `body`) VALUES ('$tel', '$email', '$subject', '$body')";
        $result = mysqli_query($conn, $sql);

        
        if($result) {
            echo "Successfully submitted message.";
        } else {
            echo "Error submitting message";
        }
        echo "<br>Redirecting you in 3 seconds";
        header("refresh:3;url=../contact.php");
    }         
?> 