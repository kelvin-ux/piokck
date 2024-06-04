<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Poly</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php session_start(); ?>
<header>
    <nav>
        <ul class="nav-left">
            <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
            <li><a href="../subsites/info.php">Ogłoszenia</a></li>
            <li><a href="../subsites/korepetycje.php">Korki</a></li>
            <li><a href="../subsites/metody.php">Metody Nauczanie</a></li>
        </ul>
        <ul class="nav-right">
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <li><a href="../subsites/edit.html">Edycja profilu</a></li>
                <li><a href="../log/logout.php">Wyloguj</a></li>
            <?php else: ?>
                <li><a href="#" id="login-btn">Logowanie</a></li>
                <li><a href="#" id="register-btn" class="sign-up">Rejestracja</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

    <div class="popup-content" style="display: flex">
        <div class="left-content">
            <form action="../log/register.php" method="post">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie" required>
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko" required>
                <label for="rok_studiow">Rok studiów:</label>
                <input type="text" id="rok_studiow" name="rok_studiow" required>
                <label for="kierunek">Kierunek:</label>
                <input type="text" id="kierunek" name="kierunek" required>
                <button type="submit">Zastosuj zmiany</button>
            </form>
        </div>
        <div>
            <img src="../images/avatar5.png" alt="Avatar" class="avatar" style="width: 100%">
            <button id="clickme" onclick="changeImage()">Zmień obraz</button>
        </div>
    </div>
    <div class="popup-content">
        <form action="../log/register.php" method="post">
            <label for="haslo">Hasło:</label>
            <input type="password" id="haslo" name="haslo" required>
            <label for="confirm_haslo">Potwierdź Hasło:</label>
            <input type="password" id="confirm_haslo" name="confirm_haslo" required>
            <button type="submit">Zmień hasło</button>
        </form>
    </div>
    <div class="popup-content">
        <form action="../log/register.php" method="post">
            <label for="tytul">Tytul</label>
            <input type="text" id="tytul" name="tytul" required>
            <label for="data">Data</label>
            <input type="date" id="data" name="data" required>
            <label for="miejscowosc">Miejscowosc</label>
            <input type="text" id="miejscowość" name="miejscowosc" required>
            <label for="opis">Opis</label>
            <textarea id="opis" name="opis" rows="5" style="width:100%; margin-bottom: 10px"> </textarea>
            <button type="submit">Dodaj/edytuj korki</button>
        </form>
        <form action="../log/register.php" method="post">
            <select>
                <option>Opcja 1</option>
                <option>Opcja 2</option>
                <option>Opcja 3</option>
            </select>
            <button type="submit">Usuń korki</button>
        </form>
    </div>

<footer>&copy; 2024 Poly. All rights reserved</footer>
<script src='../script.js'></script>
</body>

</html>
