<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Metody Nauczania - Poly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            <ul class="nav-right">
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <li><a href="../subsites/edit.php">Edycja profilu</a></li>
                    <li><a href="../log/logout.php">Wyloguj</a></li>
                <?php else: ?>
                    <li><a href="#" id="login-btn">Logowanie</a></li>
                    <li><a href="#" id="register-btn" class="sign-up">Rejestracja</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <div id="login-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" id="close-login">&times;</span>
            <h2>Zaloguj się</h2>
            <form id="login-form">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="haslo">Hasło:</label>
                <input type="password" id="haslo" name="haslo" required>
                <button type="submit">Zaloguj się</button>
            </form>
            <div id="login-error" class="error-message"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#login-form').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: '../log/login.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            window.location.href = 'metody.php';
                        } else {
                            $('#login-error').text(response.message);
                            $('#login-popup').show();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX error: ' + textStatus + ' : ' + errorThrown);
                    }
                });
            });

            $('#close-login').on('click', function() {
                $('#login-popup').hide();
            });
        });
    </script>

    <div id="register-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" id="close-register">&times;</span>
            <h2>Zarejestruj się</h2>
            <form id="register-form">
                <label for="imie">Imię:</label>
                <p>Imię musi mieć od 3 do 32 znaków.</p>
                <input type="text" id="imie" name="imie" required>
                <label for="nazwisko">Nazwisko:</label>
                <p>Nazwisko musi mieć od 3 do 32 znaków.</p>
                <input type="text" id="nazwisko" name="nazwisko" required>
                <label for="email">Email:</label>
                <p>Imię musi mieć od 3 do 32 znaków.</p>
                <input type="email" id="email" name="email" required>
                <label for="haslo">Hasło:</label>
                <p>Hasło musi mieć minimum 8 znaków.</p>
                <p>Hasło musi zawierać co najmniej 1 liczbę.</p>
                <p>Hasło musi zawierać co najmniej 1 dużą literę.</p>
                <p>Hasło musi zawierać co najmniej 1 znak specjalny.</p>
                <input type="password" id="haslo" name="haslo" required>
                <label for="confirm_haslo">Potwierdź Hasło:</label>
                <input type="password" id="confirm_haslo" name="confirm_haslo" required>
                <label for="rok_studiow">Rok studiów:</label>
                <p>Rok studiów musi być liczbą z zakresu od 1 do 12.</p>
                <input type="number" id="rok_studiow" name="rok_studiow" required>
                <label for="kierunek">Kierunek:</label>
                <input type="text" id="kierunek" name="kierunek" required>
                <button type="submit">Zarejestruj się</button>
            </form>
            <div id="register-error" class="error-message"></div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#register-form').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: '../log/register.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            window.location.href = 'metody.php';
                        } else {
                            $('#register-error').css('color', 'red').text(response.message);
                        }
                    }
                });
            });

            $('#close-register').on('click', function() {
                $('#register-popup').hide();
            });
        });
    </script>
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
