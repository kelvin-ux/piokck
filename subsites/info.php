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
                    <img src="../blogimg/s1.png" alt="Dni Otwarte" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Dni Otwarte na PŁ</h2>
                        <p>Zapraszamy wszystkich zainteresowanych na Dni Otwarte Politechniki Łódzkiej! Odbędą się one 15 i 16 czerwca. Będzie to doskonała okazja, aby poznać naszą uczelnię, zwiedzić kampus oraz dowiedzieć się więcej o kierunkach studiów, które oferujemy. Przygotowaliśmy wiele atrakcji, w tym spotkania z wykładowcami i studentami, prezentacje laboratoriów oraz pokazy naukowe. Do zobaczenia!</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../blogimg/s1.png" alt="Charytatywny Maraton" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Charytatywny Maraton PŁ</h2>
                        <p>Politechnika Łódzka organizuje charytatywny maraton, który odbędzie się 25 czerwca. Wszystkie zebrane środki zostaną przekazane na wsparcie lokalnych organizacji charytatywnych. Biegniemy, aby pomóc potrzebującym! Maraton rozpocznie się o godzinie 10:00 na głównym stadionie uczelni. Zapisy trwają do 20 czerwca. Dołącz do nas i biegnij dla dobra innych!</p>
                    </div>
                </div>
                <div class="announcement">
                    <img src="../blogimg/s1.png" alt="Konkurs Informatyczny" class="announcement-img">
                    <div class="announcement-text">
                        <h2>Konkurs Informatyczny PŁ</h2>
                        <p>Zapraszamy wszystkich studentów do udziału w Konkursie Informatycznym Politechniki Łódzkiej! Konkurs odbędzie się 30 czerwca i będzie składał się z kilku etapów, w tym zadań programistycznych oraz prezentacji projektów. Na zwycięzców czekają atrakcyjne nagrody, w tym staże w wiodących firmach IT oraz sprzęt komputerowy. Rejestracja trwa do 25 czerwca. Pokaż swoje umiejętności i zdobądź cenne doświadczenie!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='../script.js'></script>
</body>
</html>