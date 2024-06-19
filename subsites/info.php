<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ogłoszenia - Poly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                            window.location.href = 'info.php';
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
                            window.location.href = 'info.php';
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
    <script src='../script.js'></script>

</body>
</html>
