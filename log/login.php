<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $stmt = $mysqli->prepare("SELECT ID_uzytkownika, Imie, Haslo FROM uzytkownicy WHERE Email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $imie, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($haslo, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['imie'] = $imie;
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
