<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ogłoszenia - Poly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include '../log/db.php'; ?>

    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="info.php" class="active">Ogłoszenia</a></li>
                <li><a href="korepetycje.php">Korki</a></li>
                <li><a href="metody.php">Metody Nauczania</a></li>
            </ul>
            <ul class="nav-right">
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['typ'] == 1) {
                    echo "<li><a href='edycja_ogloszen.php'>Edycja Ogłoszeń</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>

    <div class="content">
        <section id="announcements">
            <h1>Ogłoszenia</h1>
            <div class="announcement-list">
                <?php
                $sql = "SELECT tytul, Opis, Zdjecie FROM ogloszenia";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='announcement'>";
                        echo "<img src='" . $row['Zdjecie'] . "' alt='" . $row['tytul'] . "' class='announcement-img'>";
                        echo "<div class='announcement-text'>";
                        echo "<h2>" . $row['tytul'] . "</h2>";
                        echo "<p>" . substr($row['Opis'], 0, 200) . "...</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "Brak dostępnych ogłoszeń.";
                }
                ?>
            </div>
        </section>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
</body>
</html>
