<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');

    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];


    $check_query = "SELECT * FROM users WHERE username='$new_username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['error'] = "Username already exists.";
        header("Location: login.php");
        exit();
    } else {

        $insert_query = "INSERT INTO users (username, password) VALUES ('$new_username', '$new_password')";
        if (mysqli_query($conn, $insert_query)) {
            $_SESSION['message'] = "User registered successfully. You can now login.";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Error: " . mysqli_error($conn);
            header("Location: login.php");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
