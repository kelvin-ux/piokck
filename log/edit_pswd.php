<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $haslo = $_POST['haslo'];
    $confirm_haslo = $_POST['confirm_haslo'];
    if($haslo == $confirm_haslo){

        $haslo = password_hash($_POST['haslo'], PASSWORD_DEFAULT);
        $confirm_haslo = password_hash($_POST['confirm_haslo'], PASSWORD_DEFAULT);

        $sql = "UPDATE uzytkownicy SET Haslo=? WHERE ID_uzytkownika=?";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("si", $haslo, $_SESSION['id']);

        header("location: ../subsites/edit.php");
        $stmt->execute();
        $stmt->close();
    }
    else{
        $_SESSION['error']=1;
        header("location: ../subsites/edit.php");
    }
}
?>
