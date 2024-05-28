<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Dodaj Film</title>
</head>
<body>
    <h1>Dodaj Film</h1>
         <form method="POST" action="index-add.php">
            <h2>Podaj tytuł:</h2>
         <input type="text" name="title" required></br>
            <h2>Podaj opis:</h2>
         <textarea name="description" rows="4" cols="50"  required></textarea></br>
            <h2>Podaj link do okładki:</h2>
         <input type="text" name="cover"  required></br></br>
         <input type="submit" value="Dodaj film"></br></br>
            <a href="index.php">Powrót</a>
     </form>
</body>
</html>





<?php
    include 'connection.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $cover = $_POST['cover'];


        $sql = "INSERT INTO lista (tytul, opis, okladka) VALUES ('$title', '$description', '$cover')";

        if ($conn->query($sql) === TRUE) {
            echo "<h3>" . "Film został dodany." . "</h3>";
        } else {
            echo "Błąd podczas dodawania filmu: " . $conn->error;
        }
    }
?>
