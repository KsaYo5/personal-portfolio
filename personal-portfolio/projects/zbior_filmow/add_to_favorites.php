<?php
include "connection.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    $username = $_SESSION['username'];
    $movie_title = $_POST['movie_title'];

    
    $user_query = "SELECT id FROM users WHERE username='$username'";
    $user_result = mysqli_query($conn, $user_query);

    if (mysqli_num_rows($user_result) > 0) {
        $user_row = mysqli_fetch_assoc($user_result);
        $user_id = $user_row['id'];

        
        $check_query = "SELECT * FROM ulubione WHERE user_id=$user_id AND movie_title='$movie_title'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "Film już znajduje się w ulubionych.";
        } else {
   
            $insert_query = "INSERT INTO ulubione (user_id, movie_title) VALUES ($user_id, '$movie_title')";
            if (mysqli_query($conn, $insert_query)) {
                echo "Film dodany do ulubionych.";
            } else {
                echo "Błąd podczas dodawania filmu do ulubionych: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Nie znaleziono użytkownika.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
