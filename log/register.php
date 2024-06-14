<?php
session_start();
include 'db.php';

$response = array("status" => "error", "message" => "Unknown error occurred.");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $email = trim($_POST['email']);
    $haslo = $_POST['haslo'];
    $confirm_haslo = $_POST['confirm_haslo'];
    $rok_studiow = $_POST['rok_studiow'];
    $kierunek = trim($_POST['kierunek']);
    $typ = 0; // Domyślny typ użytkownika

    // Walidacja po stronie serwera
    if (strlen($imie) < 3 || strlen($imie) > 32) {
        $response["message"] = "Imię musi mieć od 3 do 32 znaków.";
    } elseif (strlen($nazwisko) < 3 || strlen($nazwisko) > 32) {
        $response["message"] = "Nazwisko musi mieć od 3 do 32 znaków.";
    } elseif (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $response["message"] = "Podaj prawidłowy adres email.";
    } elseif (!ctype_digit($rok_studiow) || $rok_studiow < 1 || $rok_studiow > 12) {
        $response["message"] = "Rok studiów musi być liczbą z zakresu od 1 do 12.";
    } elseif (strlen($haslo) < 8) {
        $response["message"] = "Hasło musi mieć minimum 8 znaków.";
    } elseif (!preg_match('/\d/', $haslo)) {
        $response["message"] = "Hasło musi zawierać co najmniej 1 liczbę.";
    } elseif (!preg_match('/[A-Z]/', $haslo)) {
        $response["message"] = "Hasło musi zawierać co najmniej 1 dużą literę.";
    } elseif (!preg_match('/[@$!%*?&]/', $haslo)) {
        $response["message"] = "Hasło musi zawierać co najmniej 1 znak specjalny.";
    } elseif ($haslo !== $confirm_haslo) {
        $response["message"] = "Hasła muszą być takie same.";
    } else {
        // Hashowanie hasła
        $hashed_password = password_hash($haslo, PASSWORD_DEFAULT);

        $stmt = $mysqli->prepare("INSERT INTO uzytkownicy (Imie, Nazwisko, Email, Haslo, Rok_studiow, Kierunek, Typ) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $imie, $nazwisko, $email, $hashed_password, $rok_studiow, $kierunek, $typ);

        if ($stmt->execute()) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $stmt->insert_id;
            $_SESSION['imie'] = $imie;
            $_SESSION['nazwisko'] = $nazwisko;
            $_SESSION['rok'] = $rok_studiow;
            $_SESSION['kierunek'] = $kierunek;
            $_SESSION['awatar'] = null;
            $_SESSION['typ'] = 0;
            $_SESSION['error'] = 0;
            $response["status"] = "success";
            $response["message"] = "Rejestracja zakończona sukcesem.";
        } else {
            $response["message"] = "Błąd: " . $stmt->error;
        }

        $stmt->close();
    }
}

echo json_encode($response);
?>
