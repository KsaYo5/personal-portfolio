<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zbiór Filmów</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    include 'connection.php';

    $username = $_SESSION['username'];


    $sql = "SELECT tytul, okladka, opis FROM lista WHERE tytul IN (SELECT movie_title FROM ulubione WHERE user_id IN (SELECT id FROM users WHERE username='$username'))";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Ulubione filmy użytkownika $username:</h1>";
        while ($row = $result->fetch_assoc()) {
            echo '<div class="movie-square">';
            echo '<a href="index2.php?title=' . urlencode($row["tytul"]) . '" class="movie-title">' . $row["tytul"] . '</a>';
            echo '<img class="movie-image" src="' . $row["okladka"] . '" alt="' . $row["tytul"] . '" data-description="' . $row["opis"] . '">';
            echo '</div>';
        }
    } else {
        echo "Brak ulubionych filmów.";
    }
    ?>
</body>
</html>
