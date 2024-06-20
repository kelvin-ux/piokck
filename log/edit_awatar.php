<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];

    $filename_base = pathinfo($filename, PATHINFO_FILENAME);
    $filename_ext = pathinfo($filename, PATHINFO_EXTENSION);

    $escaped_filename_base = mysqli_real_escape_string($mysqli, $filename_base);
    $escaped_filename_ext = mysqli_real_escape_string($mysqli, $filename_ext);

    $new_filename = $escaped_filename_base . '_awatar.' . $escaped_filename_ext;
    $folder = "../images/" . $new_filename;

    $sql = "UPDATE uzytkownicy SET Profil='$new_filename' WHERE ID_Uzytkownika=" . intval($_SESSION['id']);

    $mysqli->query($sql);


    move_uploaded_file($tempname, $folder);
    $_SESSION['awatar'] = $new_filename;
    header("location: ../subsites/edit.php");

}
?>
