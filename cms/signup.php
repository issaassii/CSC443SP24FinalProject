<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: index.php');
        exit();
    }
?>

<html>
    <head>
        <link href="../fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="text-align:center;">
        <div class="main">
            <div class="card" id="login" style="min-width:30%;padding:15px 15px 0 15px;text-align:left;display:inline-block;margin-top:10%;">
                <h2 style="text-align:center;">Sign Up</h2>
                <form action="../be/su.php" method="POST">
                        <div class="form-group">
                      <label>Email</label>
                      <input type="email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" name="signupemail" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="signuppassword" class="form-control" placeholder="Password" required>
                    </div>
                    <div style="text-align:center;width:100%;">
                        <button type="submit" class="btn btn-primary" style="margin:10px 0 0 0;">Submit</button>
                    </div>
                </form>
            </div>
        </div>    
    </body>
</html>
