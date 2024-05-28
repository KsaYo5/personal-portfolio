<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zbiór Filmów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="logout.php">Wyloguj</a>

    <h1>Zbiór Filmów</h1>

    <form method="GET" action="index.php">
        <input type="text" name="title_filter" placeholder="Wpisz tytuł"><br>
        <input type="submit" value="Wyszukaj">
    </form><br>

    <a href="index-add.php">Dodaj film</a><br>
   
    <a href="ulubione.php">Ulubione</a>

    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    include 'connection.php';

    $sql = "SELECT tytul, okladka, opis FROM lista";

    if (isset($_GET['title_filter']) && !empty($_GET['title_filter'])) {
        $title_filter = $_GET['title_filter'];
        $sql .= " WHERE tytul LIKE '%$title_filter%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="movie-square">';

            echo '<a href="index2.php?title=' . urlencode($row["tytul"]) . '" class="movie-title">' . $row["tytul"] . '</a>';
            echo '<img class="movie-image" src="' . $row["okladka"] . '" alt="' . $row["tytul"] . '" data-description="' . $row["opis"] . '">';
    
            echo '<form method="POST" action="add_to_favorites.php">';
            echo '<input type="hidden" name="movie_title" value="' . $row["tytul"] . '">';
            echo '<input type="submit" value="Dodaj do ulubionych"><br>';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo "Brak filmów do wyświetlenia.";
    }
    ?>

    <div class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
