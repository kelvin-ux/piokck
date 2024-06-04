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
            </ul>
        </nav>
    </header>

    <div class="content">
        <section id="teaching-methods">
            <h1>Metody Nauczania</h1>
            <div class="methods-list">
                <div class="method-item">
                    <a href="https://szkolna24.pl/artykul/blog/nowatorskie-metody-nauczania">
                        <div class="method-content">
                            <h2>Nowatorskie metody nauczania</h2>
                            <img src="../blogimg/s1.png" alt="Metoda 1" class="method-img">
                        </div>
                    </a>
                </div>
                <div class="method-item">
                    <a href="https://www.studenckiesprawy.pl/2019/12/jak-sie-uczyc-na-studiach/">
                        <div class="method-content">
                            <h2>Jak się uczyć na studiach?</h2>
                            <img src="../blogimg/s1.png" alt="Metoda 2" class="method-img">
                        </div>
                    </a>
                </div>
                <div class="method-item">
                    <a href="https://fundusz.org/blog/zapamietaj-rob-dluzsze-przerwy-w-nauce-zapamietasz-wiecej/?gad_source=1&gclid=Cj0KCQjwsPCyBhD4ARIsAPaaRf2oIb_PtsIANzbZd8SE5_-WvLrCtoKANJ_xxAIKtSgyrb3sp2clqJ8aAi-4EALw_wcB">
                        <div class="method-content">
                            <h2>Jak uczyć efektywnie?</h2>
                            <img src="../blogimg/s1.png" alt="Metoda 3" class="method-img">
                        </div>
                    </a>
                </div>
                <!-- Dodaj więcej metod według potrzeby -->
            </div>
        </section>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='../script.js'></script>
</body>
</html>