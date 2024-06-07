<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $stmt = $mysqli->prepare("SELECT ID_uzytkownika, Imie, Nazwisko, Haslo, Rok_studiow, Kierunek FROM uzytkownicy WHERE Email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $imie, $nazwisko, $hashed_password, $rok, $kierunek);
        $stmt->fetch();
        
        if (password_verify($haslo, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['imie'] = $imie;
            $_SESSION['nazwisko'] = $nazwisko;
            $_SESSION['rok'] = $rok;
            $_SESSION['kierunek'] = $kierunek;
            $_SESSION['error'] = 0;
            header("location: ../index.php");
        } else {
            echo "Nieprawidłowe hasło.";
        }
    } else {
        echo "Nie znaleziono użytkownika o podanym adresie email.";
    }

    $stmt->close();
}
?>
