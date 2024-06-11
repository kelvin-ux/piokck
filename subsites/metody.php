<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Metody Nauczania - Poly</title>
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
                <li><a href="korepetycje.php">Korki</a></li>
                <li><a href="metody.php" class="active">Metody Nauczania</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <section id="methods">
            <h1>Metody Nauczania</h1>
            <div class="methods-list">
                <div class="method-item" data-method="montessori">
                    <div class="method-content">
                        <img src="../images/Montessori.jpg" alt="Montessori" class="method-img">
                        <h2>Metoda Montessori</h2>
                        <p>Metoda Montessori to podejście pedagogiczne, które wspiera naturalny rozwój dziecka...</p>
                    </div>
                </div>
                <div class="method-item" data-method="waldorfska">
                    <div class="method-content">
                        <img src="../images/waldorfska.jpeg" alt="Waldorfska" class="method-img">
                        <h2>Metoda Waldorfska</h2>
                        <p>Metoda Waldorfska skupia się na wszechstronnym rozwoju dziecka...</p>
                    </div>
                </div>
                <div class="method-item" data-method="sokratyczna">
                    <div class="method-content">
                        <img src="../images/sokratyczna.jpg" alt="Sokratyczna" class="method-img">
                        <h2>Metoda Sokratyczna</h2>
                        <p>Metoda Sokratyczna polega na zadawaniu pytań, które pomagają uczniom...</p>
                    </div>
                </div>
                <div class="method-item" data-method="project-based">
                    <div class="method-content">
                        <img src="../images/project-based.jpg" alt="Project Based" class="method-img">
                        <h2>Metoda Project-Based Learning</h2>
                        <p>Project-Based Learning koncentruje się na uczeniu poprzez realizację projektów...</p>
                    </div>
                </div>
                <div class="method-item" data-method="flipped-classroom">
                    <div class="method-content">
                        <img src="../images/flipped_classroom.png" alt="Flipped Classroom" class="method-img">
                        <h2>Flipped Classroom</h2>
                        <p>Flipped Classroom to metoda, w której tradycyjne wykłady odbywają się online...</p>
                    </div>
                </div>
                <div class="method-item" data-method="game-based">
                    <div class="method-content">
                        <img src="../images/game_based.jpg" alt="Game Based Learning" class="method-img">
                        <h2>Game-Based Learning</h2>
                        <p>Game-Based Learning polega na wykorzystaniu gier edukacyjnych...</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Popups -->
    <div id="montessori" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Metoda Montessori</h2>
            <p>Metoda Montessori to podejście pedagogiczne, które wspiera naturalny rozwój dziecka, promując samodzielność i kreatywność...</p>
            <a href="https://pl.wikipedia.org/wiki/Metoda_Montessori">Czytaj więcej</a>
        </div>
    </div>
    <div id="waldorfska" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Metoda Waldorfska</h2>
            <p>Metoda Waldorfska skupia się na wszechstronnym rozwoju dziecka, integrując naukę z sztuką, muzyką i pracą manualną...</p>
            <a href="https://pl.wikipedia.org/wiki/Pedagogika_waldorfska">Czytaj więcej</a>
        </div>
    </div>
    <div id="sokratyczna" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Metoda Sokratyczna</h2>
            <p>Metoda Sokratyczna polega na zadawaniu pytań, które pomagają uczniom w samodzielnym dochodzeniu do wiedzy i rozwijaniu krytycznego myślenia...</p>
            <a href="https://pl.wikipedia.org/wiki/Metoda_sokratyczna">Czytaj więcej</a>
        </div>
    </div>
    <div id="project-based" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Metoda Project-Based Learning</h2>
            <p>Project-Based Learning koncentruje się na uczeniu poprzez realizację projektów, co pomaga uczniom rozwijać umiejętności praktyczne i współpracę...</p>
            <a href="https://www.pblworks.org/what-is-pbl">Czytaj więcej</a>
        </div>
    </div>
    <div id="flipped-classroom" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Flipped Classroom</h2>
            <p>Flipped Classroom to metoda, w której tradycyjne wykłady odbywają się online, a czas w klasie jest wykorzystywany na ćwiczenia i interakcje...</p>
            <a href="https://files.eric.ed.gov/fulltext/ED618141.pdf">Czytaj więcej</a>
        </div>
    </div>
    <div id="game-based" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Game-Based Learning</h2>
            <p>Game-Based Learning polega na wykorzystaniu gier edukacyjnych do nauczania, co angażuje uczniów i ułatwia przyswajanie wiedzy...</p>
            <a href="https://www.edutopia.org/topic/game-based-learning/">Czytaj więcej</a>
        </div>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='../script.js'></script>
</body>
</html>
