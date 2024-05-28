<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $haslo = password_hash($_POST['haslo'], PASSWORD_DEFAULT);
    $rok_studiow = $_POST['rok_studiow'];
    $kierunek = $_POST['kierunek'];

    $stmt = $mysqli->prepare("INSERT INTO uzytkownicy (Imie, Nazwisko, Email, Haslo, Rok_studiow, Kierunek) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $imie, $nazwisko, $email, $haslo, $rok_studiow, $kierunek);

    if ($stmt->execute()) {
        echo "Rejestracja zakończona sukcesem.";
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}
?>
