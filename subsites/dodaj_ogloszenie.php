<?php
// Definicja zmiennej informacyjnej
$info = "";

// Sprawdź, czy formularz został wysłany (czy dane są dostępne przez metodę POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Połącz z bazą danych
    $mysqli = new mysqli("localhost", "root", "", "kck_pio");
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Pobierz dane z formularza
    $tytul = $_POST['tytul'];
    $opis = $_POST['opis'];
    $zdjecie = $_POST['zdjecie'];

    // Przygotuj zapytanie SQL do dodania ogłoszenia
    $query = "INSERT INTO ogloszenia (tytul, opis, zdjecie) VALUES (?, ?, ?)";

    // Przygotuj i wykonaj zapytanie przy użyciu prepared statement
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sss", $tytul, $opis, $zdjecie); // "sss" oznacza trzy stringi

    if ($stmt->execute()) {
        // Jeśli dodano ogłoszenie, ustaw komunikat informacyjny
        $info = "Poprawnie dodano ogłoszenie.";

        // Zamknij prepared statement
        $stmt->close();
    } else {
        // Jeśli wystąpił błąd podczas dodawania ogłoszenia, ustaw odpowiedni komunikat
        $info = "Błąd podczas dodawania ogłoszenia: " . $stmt->error;
    }

    // Zamknij połączenie z bazą danych
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dodawanie ogłoszenia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0b0e27; /* Nowy kolor tła */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .admin-panel {
            background-color: #1a1d3f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            color: white;
            width: 50%;
            max-width: 800px;
            text-align: center;
        }

        .admin-panel h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .admin-panel p {
            color: #4CAF50; /* Zielony kolor informacji */
            font-weight: bold;
        }

        .admin-panel a {
            color: white;
            text-decoration: none;
            border-bottom: 1px dashed #ccc;
            transition: border-bottom 0.3s ease;
            margin-right: 10px;
        }

        .admin-panel a:hover {
            border-bottom: 1px dashed transparent;
        }
    </style>
</head>
<body>

<div class="admin-panel">
    <h2>Panel Administratora - Dodawanie ogłoszenia</h2>

    <?php if (!empty($info)) : ?>
        <p><?php echo $info; ?></p>
    <?php endif; ?>

    <a href="edycja_ogloszen.php">Powrót do panelu administracyjnego</a>
    <a href="../index.php">Powrót do strony głównej</a>
</div>

</body>
</html>
