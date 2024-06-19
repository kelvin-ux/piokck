<?php
session_start();
include 'db.php';
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $rok = $_POST['rok_studiow'];
    $kierunek = $_POST['kierunek'];

    if (strlen($imie) < 3 || strlen($imie) > 32) {
        $_SESSION['error']=6;
        header("location: ../subsites/edit.php");
    } elseif (strlen($nazwisko) < 3 || strlen($nazwisko) > 32) {
        $_SESSION['error']=7;
        header("location: ../subsites/edit.php");
    } elseif (!ctype_digit($rok) || $rok < 1 || $rok > 12) {
        $_SESSION['error']=8;
        header("location: ../subsites/edit.php");
    }else {

        $sql = "UPDATE uzytkownicy SET Imie=?, Nazwisko=?, Rok_studiow=?, Kierunek=? WHERE ID_uzytkownika=?";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssi", $imie, $nazwisko, $rok, $kierunek, $_SESSION['id']);

        $_SESSION['imie'] = $imie;
        $_SESSION['nazwisko'] = $nazwisko;
        $_SESSION['rok'] = $rok;
        $_SESSION['kierunek'] = $kierunek;
        header("location: ../subsites/edit.php");
        $stmt->execute();


        $stmt->close();
    }
}
?>
