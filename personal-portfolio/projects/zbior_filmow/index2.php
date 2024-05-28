<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły Filmu</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <?php
 
    if(isset($_GET['title'])) {

        $title = urldecode($_GET['title']);
        echo "<h1>$title</h1>";

        include 'connection.php';
        $sql = "SELECT okladka, opis FROM lista WHERE tytul = '$title'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<div class="movie-details">';
            echo '<div class="movie-image-container">';
            echo '<img class="movie-image" src="' . $row["okladka"] . '" alt="' . $title . '">';
            echo '</div>';
            echo '<div class="movie-description-container">';
            echo '<p class="movie-description">' . $row["opis"] . '</p>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "Brak danych o filmie.";
        }
    } else {
        echo "Nieprawidłowe zapytanie.";
    }
    ?>
    <script src="app.js"></script>
</body>
</html>
