<?php
session_start();
include 'db.php';
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tytul = $_POST['tytul'];
    $date = $_POST['data'];
    $miejscowosc = $_POST['miejscowosc'];
    $opis = $_POST['opis'];
    $kontakt = $_POST['kontakt'];

    $stmt = $mysqli->prepare("INSERT INTO korki (Tytul, Opis, Data, Miejscowość, ID_uzytkownika, Kontakt) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $tytul, $opis, $date, $miejscowosc, $_SESSION['id'], $kontakt);
    if ($stmt->execute()) {
        $stmt->close();
        header("location: ../subsites/edit.php");
    }
    else{
        $response["message"] = "Błąd: " . $stmt->error;
    }
}
?>