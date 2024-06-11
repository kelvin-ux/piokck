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
    <?php session_start(); ?>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="info.php" class="active">Ogłoszenia</a></li>
                <li><a href="korepetycje.php">Korki</a></li>
                <li><a href="metody.php">Metody Nauczania</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <section id="announcements">
            <h1>Ogłoszenia</h1>
            <div class="announcement-list">
                <div class="announcement">
                    <img src="../blogimg/juwe.jpg" alt="Juwenalia 2024" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Juwenalia 2024</h2>
                        <p>Największe studenckie święto na uczelni, pełne koncertów, imprez plenerowych, konkursów i wspólnej zabawy. Odbędzie się 13 maja 2024 roku.</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../blogimg/tragii.jpeg" alt="Targi Pracy 2024" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Targi Pracy 2024</h2>
                        <p>Zapraszamy na Targi Pracy, które odbędą się 21 marca 2024 roku. Doskonała okazja do znalezienia pracy lub stażu.</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../blogimg/festw.jpeg" alt="Festiwal Nauki i Techniki 2024" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Festiwal Nauki i Techniki 2024</h2>
                        <p>Zapraszamy na Festiwal Nauki i Techniki, który odbędzie się 9 września 2023 roku. Wiele ciekawych wykładów i prezentacji.</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../blogimg/kong.png" alt="Kongres Innowacji Sierpien 2023" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Kongres Innowacji Sierpień 2023</h2>
                        <p>VI Kongres Innowacji w Energetyce odbędzie się 17 sierpnia 2023 roku. Dołącz do nas i poznaj najnowsze innowacje.</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../blogimg/dn.jpg" alt="Dni Otwarte 2024" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Dni Otwarte 2024</h2>
                        <p>Dni Otwarte Politechniki Łódzkiej odbędą się 14 marca 2024 roku. Zapraszamy wszystkich zainteresowanych studiami na naszej uczelni.</p>
                    </div>
                </div>
                <!-- Nowe ogłoszenia -->
                <div class="announcement">
                    <img src="../images/warsztaty.jpg" alt="Warsztaty Programistyczne" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Warsztaty Programistyczne</h2>
                        <p>Zapraszamy na warsztaty programistyczne, które odbędą się 10 lipca. Będzie to doskonała okazja, aby nauczyć się podstaw programowania oraz poznać najnowsze technologie. Warsztaty są otwarte dla wszystkich studentów.</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../images/wystawa.jpg" alt="Wystawa Projektów Studenckich" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Wystawa Projektów Studenckich</h2>
                        <p>Zapraszamy na wystawę projektów studenckich, która odbędzie się 5 sierpnia. Studenci zaprezentują swoje projekty z różnych dziedzin, w tym inżynierii, informatyki i sztuki. Przyjdź i zobacz, nad czym pracują twoi koledzy!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='../script.js'></script>
</body>
</html>