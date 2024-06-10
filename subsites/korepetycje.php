<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Korepetycje - Poly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php session_start(); ?>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="info.php">Ogłoszenia</a></li>
                <li><a href="korepetycje.php" class="active">Korki</a></li>
                <li><a href="metody.php">Metody Nauczania</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <section id="tutoring">
            <h1>Korepetycje</h1>
            <div class="tutoring-list">
                <div class="tutoring-item">
                    <img src="../blogimg/s1.png" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Matematyka</h2>
                        <p>Data: 15 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z matematyki na poziomie szkoły średniej. Pomogę przygotować się do matury oraz zrozumieć trudne zagadnienia.</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../blogimg/s1.png" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Fizyka</h2>
                        <p>Data: 20 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Prowadzę korepetycje z fizyki dla uczniów szkoły średniej. Skuteczne przygotowanie do egzaminów i pomoc w bieżących problemach.</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../blogimg/s1.png" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Język Angielski</h2>
                        <p>Data: 25 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z języka angielskiego na każdym poziomie zaawansowania. Przygotowanie do egzaminów, konwersacje, pomoc w zadaniach domowych.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='../script.js'></script>
</body>
</html>
