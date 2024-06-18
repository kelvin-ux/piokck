<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Administratora - Ogłoszenia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0b0e27; /* Nowy kolor tła */
        }

        .admin-panel {
            background-color: #1a1d3f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            color: white;
            width: 50%;
            max-width: 800px;
        }

        .admin-panel h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .admin-panel form {
            display: flex;
            flex-direction: column;
        }

        .admin-panel label {
            margin-bottom: 10px;
        }

        .admin-panel input[type="text"],
        .admin-panel input[type="number"],
        .admin-panel textarea {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .admin-panel button {
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .admin-panel button:hover {
            background-color: #45a049;
        }

        .admin-panel a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: white;
            text-decoration: none;
            border: 1px solid #ff5b60; /* Kolor obramowania */
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #ff5b60; /* Kolor tła */
            transition: background-color 0.3s ease;
        }

        .admin-panel a:hover {
            background-color: #ff3e47; /* Kolor tła po najechaniu */
            border-color: #ff3e47; /* Kolor obramowania po najechaniu */
        }
    </style>
</head>
<body>

<div class="admin-panel">
    <h2>Panel Administratora - Ogłoszenia</h2>

    <!-- Formularz dodawania ogłoszenia -->
    <form action="dodaj_ogloszenie.php" method="post">
        <label for="tytul">Tytuł ogłoszenia:</label>
        <input type="text" id="tytul" name="tytul" required>
        
        <label for="opis">Opis ogłoszenia:</label>
        <textarea id="opis" name="opis" rows="5" required></textarea>
        
        <label for="zdjecie">Ścieżka do zdjęcia:</label>
        <input type="text" id="zdjecie" name="zdjecie" required>
        
        <button type="submit">Dodaj ogłoszenie</button>
    </form>

    <hr>

    <!-- Formularz usuwania ogłoszenia -->
    <form action="usun_ogloszenie.php" method="post">
        <label for="delete_id">ID ogłoszenia do usunięcia:</label>
        <select id="delete_id" name="id_ogloszenia">
            <?php
            $mysqli = new mysqli("localhost", "root", "", "kck_pio");
            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            $result = $mysqli->query("SELECT ID_ogloszenia, tytul FROM ogloszenia");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['ID_ogloszenia'] . '">' . $row['ID_ogloszenia'] . ' - ' . $row['tytul'] . '</option>';
                }
            } else {
                echo '<option value="">Brak ogłoszeń</option>';
            }
            $mysqli->close();
            ?>
        </select>
        <button type="submit" onclick="return confirm('Czy na pewno chcesz usunąć to ogłoszenie?')">Usuń ogłoszenie</button>
    </form>

    <!-- Link do powrotu do podstrony ogłoszenia -->
    <a href="info.php?id=" class="back-link">Powrót</a>
</div>

</body>
</html>