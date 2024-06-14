<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edycja ogłoszeń - Poly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .announcement {
            margin-bottom: 2rem;
        }

        .content {
            margin-top: 4rem;
        }

        .nav-left a:first-child {
            margin-right: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="info.php">Ogłoszenia</a></li>
                <li><a href="korepetycje.php">Korki</a></li>
                <li><a href="metody.php">Metody Nauczania</a></li>
            </ul>
            <ul class="nav-right">
                <li><a href="edycja_ogloszen.php" class="active">Edycja ogłoszeń</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h1 style="margin-top: 0;">Edycja ogłoszeń</h1>
        
        <!-- Formularz do dodawania ogłoszeń -->
        <section class="announcement">
            <form action="process_edit.php" method="post">
                <label for="tytul">Tytuł ogłoszenia:</label>
                <input type="text" id="tytul" name="tytul" required>
                
                <label for="Opis">Opis ogłoszenia:</label>
                <textarea id="Opis" name="Opis" required></textarea>
                
                <label for="Zdjecie">Ścieżka do zdjęcia:</label>
                <input type="text" id="Zdjecie" name="Zdjecie" required>
                
                <button type="submit">Dodaj ogłoszenie</button>
            </form>
        </section>

        <!-- Formularz do usuwania ogłoszeń -->
        <section class="announcement">
            <form action="process_edit.php" method="post">
                <label for="delete_id">ID ogłoszenia do usunięcia:</label>
                <input type="number" id="delete_id" name="delete_id" required min="0">
                <button type="submit">Usuń ogłoszenie</button>
            </form>
        </section>
    </div>

    <footer class="footer">&copy; 2024 Poly. All rights reserved</footer>
</body>
</html>
