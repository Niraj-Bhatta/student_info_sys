<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        #welcome-message {
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            padding: 15%;
        }
    </style>
    <script>
        window.onload = function() {
            setTimeout(function() {
                window.location.href = "http://localhost/dbms_pjt/index.html"; // Redirects to index.html
            }, 1000); // 1 second
        }
    </script>
</head>
<body>
    <div id="welcome-message">
        <?php
        if(isset($_SESSION['email'])){
            include 'connect.php';
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT fname, lname FROM users WHERE email='$email'");
            if($row = mysqli_fetch_array($query)){
                echo "Hello " . $row['fname'] . " " . $row['lname'];
            }
        }
        ?>
    </div>
</body>
</html>
