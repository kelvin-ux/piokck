<?php
session_start();
include 'db.php';

// Dodaj debugowanie błędów
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$response = array("status" => "error", "message" => "Unknown error occurred.");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    // Dodaj debugowanie błędów połączenia z bazą danych
    if ($mysqli->connect_error) {
        $response["message"] = "Database connection failed: " . $mysqli->connect_error;
        echo json_encode($response);
        exit();
    }

    // Dodaj debugowanie zapytania SQL
    $stmt = $mysqli->prepare("SELECT ID_uzytkownika, Imie, Nazwisko, Haslo, Rok_studiow, Kierunek, Profil, typ FROM uzytkownicy WHERE Email=?");
    if (!$stmt) {
        $response["message"] = "Prepare statement failed: " . $mysqli->error;
        echo json_encode($response);
        exit();
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $imie, $nazwisko, $hashed_password, $rok, $kierunek, $awatar, $typ);
        $stmt->fetch();
        
        // Debugowanie weryfikacji hasła
        if (password_verify($haslo, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['imie'] = $imie;
            $_SESSION['nazwisko'] = $nazwisko;
            $_SESSION['rok'] = $rok;
            $_SESSION['kierunek'] = $kierunek;
            $_SESSION['awatar'] = $awatar;
            $_SESSION['typ'] = $typ;
            $_SESSION['error'] = 0;
            $response["status"] = "success";
            $response["message"] = "Logowanie powiodło się";
        } else {
            $response["message"] = "Nieprawidłowe hasło.";
        }
    } else {
        $response["message"] = "Nie znaleziono użytkownika o podanym adresie email.";
    }

    $stmt->close();
} else {
    $response["message"] = "Nieprawidłowa metoda żądania.";
}

echo json_encode($response);
?>
