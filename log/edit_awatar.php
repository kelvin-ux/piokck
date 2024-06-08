<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $new_filename = mysqli_real_escape_string($mysqli, pathinfo($filename, PATHINFO_FILENAME)) . '_awatar.' . pathinfo($filename, PATHINFO_EXTENSION);
    $folder = "../images/" . $new_filename;

    $sql = "UPDATE uzytkownicy SET Profil='$new_filename' WHERE ID_Uzytkownika=" . intval($_SESSION['id']);

    $mysqli->query($sql);


    move_uploaded_file($tempname, $folder);
    $_SESSION['awatar'] = $new_filename;
    header("location: ../subsites/edit.php");

}
?>
