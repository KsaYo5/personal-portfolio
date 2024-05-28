<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    include('connection.php');

  
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
    
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
     
        $_SESSION['error'] = "Invalid username or password";
        header("Location: login.php");
    }
} else {

    header("Location: login.php");
}

