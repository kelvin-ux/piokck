<?php
session_start();
include 'db.php';
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_korkow = $_GET['id'];
    $tytul = $_POST['tytul'];
    $opis = $_POST['opis'];
    $miejscowosc = $_POST['miejscowosc'];
    $kontakt = $_POST['kontakt'];
    $data = $_POST['data'];

    $sql = "UPDATE korki SET Tytul=?, Opis=?, Miejscowość=?, Kontakt=?, Data=? WHERE ID_korkow=? AND ID_uzytkownika=?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssssii", $tytul, $opis,$miejscowosc,$kontakt,$data, $id_korkow, $_SESSION['id']);

    header("location: ../subsites/edit.php");
    $stmt->execute();



    $stmt->close();
}
?>