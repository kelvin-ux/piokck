<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Poly</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' href='styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
    <nav>
            <ul class="nav-left">
                <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="subsites/info.html">Ogłoszenia</a></li>
                <li><a href="subsites/koreprtycje.html">Korki</a></li>
                <li><a href="subsites/metody.html">Metody Nauczanie</a></li>
            </ul>
            <ul class="nav-right">
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="log/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="#" id="loginBtn">Logowanie</a></li>
                <?php endif; ?>
                <li><a href="subsites/register.html" class="sign-up">Rejestracja</a></li>
                <li><a href="subsites/edit.html">Edycja profilu</a></li>
            </ul>
        </nav>
    </header>
    <div id="login-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Zaloguj się</h2>
            <div class="inside">
                <form>
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Zaloguj się</button>
            </form>
            </div>
        </div>
    </div>       
    <div class="s1">
        <section id="first">
            <div class="left-content">
                <div class="text-container">
                    <h1 id="animated-text" class="animated-text">Witamy na Poly!</h1>
                    <p class="subtext">Witamy na stronie Poly, gdzie znajdziesz wiele przydatnych informacji.</p>
                </div>
                <div class="email-signup">
                    <input type="email" class="email-input" placeholder="Twój adres e-mail">
                    <button class="signup-button">Zaczynamy!</button>
                </div>
            </div>
            <div class="right-content"></div>
        </section>
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
                <h3>Dni Otwarte 2024</h3>
                <a href="#" class="read-more">Czytaj więcej</a>
              </div>
            </div>
          </div>
        </div>
      </section>     
    </section>

    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Zaloguj się</h2>
            <form method="post" action="log/login.php">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" id="username" name="email" required>
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Zaloguj się</button>
            </form>
        </div>
    </div>
    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='script.js'></script>
</body>

</html>
