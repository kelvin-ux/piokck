<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Korepetycje - Poly</title>
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
                <li><a href="korepetycje.php" class="active">Korki</a></li>
                <li><a href="metody.php">Metody Nauczania</a></li>
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
                            window.location.href = 'korepetycje.php';
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
                            window.location.href = 'korepetycje.php';
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
        <section id="tutoring">
            <h1>Korepetycje</h1>
            <div class="tutoring-list">
                <div class="tutoring-item">
                    <img src="../images/matematyka.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Matematyka</h2>
                        <p>Data: 15 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z matematyki na poziomie szkoły średniej. Pomogę przygotować się do matury oraz zrozumieć trudne zagadnienia.</p>
                        <p>Wolne Godziny: <br>Poniedziałek 13.00, 18.00<br> Piątek 11.00 12.00</p>
                        <p><br>Kontakt: 111 222 333 Discord: abcdefg</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../images/fizyka.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Fizyka</h2>
                        <p>Data: 20 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Prowadzę korepetycje z fizyki dla uczniów szkoły średniej. Skuteczne przygotowanie do egzaminów i pomoc w bieżących problemach.</p>
                        <p>Wolne Godziny: <br>Wtorek 14.00, 17.00<br> Czwartek 10.00, 15.00</p>
                        <p><br>Kontakt: 123 456 789 Discord: xyzabc</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../images/ang.png" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Język Angielski</h2>
                        <p>Data: 25 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z języka angielskiego na każdym poziomie zaawansowania. Przygotowanie do egzaminów, konwersacje, pomoc w zadaniach domowych.</p>
                        <p>Wolne Godziny: <br>Środa 11.00, 16.00<br> Sobota 09.00, 13.00</p>
                        <p><br>Kontakt: 987 654 321 Discord: pqrsuvw</p>
                    </div>
                </div>
                <!-- Dodane korepetycje -->
                <div class="tutoring-item">
                    <img src="../images/chemia.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Chemia</h2>
                        <p>Data: 18 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z chemii dla uczniów szkół średnich. Przygotowanie do egzaminów maturalnych oraz pomoc w zrozumieniu trudnych zagadnień.</p>
                        <p>Wolne Godziny: <br>Poniedziałek 09.00, 14.00<br> Piątek 10.00, 15.00</p>
                        <p><br>Kontakt: 222 333 444 Discord: lmnopqr</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../images/biologia.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Biologia</h2>
                        <p>Data: 22 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Prowadzę korepetycje z biologii, oferuję pomoc w przygotowaniu do matury oraz wsparcie w codziennej nauce.</p>
                        <p>Wolne Godziny: <br>Czwartek 13.00, 18.00<br> Niedziela 11.00, 16.00</p>
                        <p><br>Kontakt: 444 555 666 Discord: uvwxzab</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../images/historia.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Historia</h2>
                        <p>Data: 28 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z historii na poziomie szkoły średniej. Pomogę w przygotowaniach do egzaminów i zrozumieniu kluczowych wydarzeń historycznych.</p>
                        <p>Wolne Godziny: <br>Wtorek 08.00, 12.00<br> Piątek 14.00, 17.00</p>
                        <p><br>Kontakt: 555 666 777 Discord: hijklmn</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../images/geografia.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Geografia</h2>
                        <p>Data: 30 czerwca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z geografii. Pomoc w przygotowaniu do matury oraz zrozumieniu trudnych zagadnień geograficznych.</p>
                        <p>Wolne Godziny: <br>Środa 10.00, 15.00<br> Sobota 13.00, 18.00</p>
                        <p><br>Kontakt: 666 777 888 Discord: opqrst</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../blogimg/s1.png" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Informatyka</h2>
                        <p>Data: 5 lipca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z informatyki. Pomoc w programowaniu, przygotowanie do olimpiad informatycznych oraz zrozumienie zagadnień technologicznych.</p>
                        <p>Wolne Godziny: <br>Wtorek 11.00, 17.00<br> Piątek 08.00, 12.00</p>
                        <p><br>Kontakt: 888 999 000 Discord: ghijklm</p>
                    </div>
                </div>
                <div class="tutoring-item">
                    <img src="../images/francuski.jpg" alt="Tutor Image" class="tutoring-img">
                    <div class="tutoring-text">
                        <h2>Język Francuski</h2>
                        <p>Data: 10 lipca 2024</p>
                        <p>Miejscowość: Łódź</p>
                        <p>Opis: Oferuję korepetycje z języka francuskiego. Pomoc w przygotowaniach do egzaminów, konwersacje oraz pomoc w codziennych zadaniach domowych.</p>
                        <p>Wolne Godziny: <br>Poniedziałek 12.00, 16.00<br> Czwartek 09.00, 14.00</p>
                        <p><br>Kontakt: 777 888 999 Discord: abcdef</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>&copy; 2024 Poly. All rights reserved</footer>
    <script src='../script.js'></script>
</body>
</html>