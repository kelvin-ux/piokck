<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Poly</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php session_start(); ?>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="subsites/info.html">Ogłoszenia</a></li>
                <li><a href="subsites/koreprtycje.html">Korki</a></li>
                <li><a href="subsites/metody.html">Metody Nauczanie</a></li>
            </ul>
            <ul class="nav-right">
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <li><a href="subsites/edit.html">Edycja profilu</a></li>
                    <li><a href="log/logout.php">Wyloguj</a></li>
                <?php else: ?>
                    <li><a href="#" id="login-btn">Logowanie</a></li>
                    <li><a href="#" id="register-btn" class="sign-up">Rejestracja</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <div class="s1">
        <section id="first">
            <div class="left-content">
                <div class="text-container">
                    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <h1 id="animated-text" class="animated-text">Witaj <?php echo $_SESSION['imie']; ?>!</h1>
                    <?php else: ?>
                        <h1 id="animated-text" class="animated-text">Witamy na Poly!</h1>
                    <?php endif; ?>
                    <p class="subtext">Witamy na stronie Poly, gdzie znajdziesz wiele przydatnych informacji.</p>
                </div>
            </div>
            <div class="right-content"></div>
        </section>
    </div>

    <div id="login-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" id="close-login">&times;</span>
            <h2>Zaloguj się</h2>
            <form action="log/login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="haslo">Hasło:</label>
                <input type="password" id="haslo" name="haslo" required>
                <button type="submit">Zaloguj się</button>
            </form>
        </div>
    </div>

    <div id="register-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" id="close-register">&times;</span>
            <h2>Zarejestruj się</h2>
            <form action="log/register.php" method="post">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie" required>
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="haslo">Hasło:</label>
                <input type="password" id="haslo" name="haslo" required>
                <label for="confirm_haslo">Potwierdź Hasło:</label>
                <input type="password" id="confirm_haslo" name="confirm_haslo" required>
                <label for="rok_studiow">Rok studiów:</label>
                <input type="text" id="rok_studiow" name="rok_studiow" required>
                <label for="kierunek">Kierunek:</label>
                <input type="text" id="kierunek" name="kierunek" required>
                <button type="submit">Zarejestruj się</button>
            </form>
        </div>
    </div>
    <div class="s2">
        <section id="what-we-do">
            <div class="what-we-do-container">
                <div class="what-we-do-content">
                    <h2>Czym się zajmujemy?</h2>
                    <p>Nieskończone możliwości na wyciągnięcie ręki</p>
                </div>
                <div class="features">
                    <div class="feature">
                        <h3>Korepetycje</h3>
                        <p>Na naszej stronie oferujemy bogatą listę ogłoszeń korepetytorów, którzy pomagają uczniom
                            zrozumieć trudne zagadnienia i przygotować się do egzaminów. Indywidualne podejście naszych
                            korepetytorów pozwala na efektywne przyswajanie wiedzy oraz osiąganie lepszych wyników.
                            Skorzystaj z naszej bazy korepetytorów, aby znaleźć wsparcie dopasowane do Twoich potrzeb
                            edukacyjnych.</p>
                    </div>
                    <div class="feature">
                        <h3>Metody Nauczania</h3>
                        <p>Oferujemy skuteczne metody nauczania, które łączą tradycyjne i nowoczesne techniki
                            edukacyjne. Na naszej stronie znajdziesz materiały dotyczące aktywnych metod nauczania,
                            technologii edukacyjnych oraz indywidualizacji nauczania. Z nami nauka staje się bardziej
                            efektywna i angażująca.</p>
                    </div>
                    <div class="feature">
                        <h3>Baza Wiedzy</h3>
                        <p>Nasza baza wiedzy to skarbnica zasobów edukacyjnych, w tym artykułów, podręczników i kursów
                            online. Ułatwiamy dostęp do najnowszych informacji i materiałów, które wspierają proces
                            nauki. Z naszą bazą wiedzy możesz samodzielnie pogłębiać swoją wiedzę i rozwijać
                            umiejętności w wybranych dziedzinach.</p>
                    </div>
                </div>
        </section>
    </div>

    <section id="blog" class="s3">
        <h2>Najciekawsze newsy</h2>
        <div class="blog-posts">
            <div class="post post-large">
                <img src="blogimg/s1.png" alt="Post Image 1">
                <div class="post-content">
                    <p class="post-date">Sep 26, 2021</p>
                    <h3>Juwenalia 2024: Największe studenckie święto na uczelni, pełne koncertów, imprez plenerowych, konkursów i wspólnej zabawy.</h3>
                    <a href="#" class="read-more">Czytaj więcej</a>
                </div>
            </div>
            <div class="small-posts">
                <div class="post">
                    <img src="blogimg/s1.png" alt="Post Image 2">
                    <div class="post-content">
                        <p class="post-date">1, 2021</p>
                        <h3>Targi Pracy: Jak to Wygladało w tym roku?</h3>
                        <a href="#" class="read-more">Czytaj więcej</a>
                    </div>
                </div>
                <div class="post">
                    <img src="blogimg/s1.png" alt="Post Image 3">
                    <div class="post-content">
                        <p class="post-date">2, 2021</p>
                        <h3>Festiwal Nauki i Techniki 2024</h3>
                        <a href="#" class="read-more">Czytaj więcej</a>
                    </div>
                </div>
                <div class="post">
                    <img src="blogimg/s1.png" alt="Post Image 4">
                    <div class="post-content">
                        <p class="post-date">3, 2021</p>
                        <h3>Kongres Innowacji Sierpien 2024</h3>
                        <a href="#" class="read-more">Czytaj więcej</a>
                    </div>
                </div>
                <div class="post">
                    <img src="blogimg/s1.png" alt="Post Image 5">
                    <div class="post-content">
                        <p class="post-date">4, 2021</p>
                        <h3>Dni Otwarte 2024: Prezentacja oferty edukacyjnej dla przyszłych studentów.</h3>
                        <a href="#" class="read-more">Czytaj więcej</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='script.js'></script>
</body>

</html>
