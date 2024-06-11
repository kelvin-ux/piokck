<?php
session_start();
include 'db.php';

$response = array("status" => "error", "message" => "Unknown error occurred.");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $stmt = $mysqli->prepare("SELECT ID_uzytkownika, Imie, Nazwisko, Haslo, Rok_studiow, Kierunek, Profil FROM uzytkownicy WHERE Email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $imie, $nazwisko, $hashed_password, $rok, $kierunek, $awatar);
        $stmt->fetch();
        
        if (password_verify($haslo, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['imie'] = $imie;
            $_SESSION['nazwisko'] = $nazwisko;
            $_SESSION['rok'] = $rok;
            $_SESSION['kierunek'] = $kierunek;
            $_SESSION['awatar'] = $awatar;
            $_SESSION['error'] = 0;
            $response["status"] = "success";
        } else {
            $response["message"] = "Nieprawidłowe hasło.";
        }
    } else {
        $response["message"] = "Nie znaleziono użytkownika o podanym adresie email.";
    }

    $stmt->close();
}

echo json_encode($response);
?>
