<?php
session_start();
include 'db.php';
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_korkow = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM korki WHERE ID_korkow = ? AND ID_uzytkownika = ?");
    $stmt->bind_param("ii", $id_korkow, $_SESSION['id']);

    header("location: ../subsites/edit.php");
    $stmt->execute();



    $stmt->close();
}
?>
