<?php
$mysqli = new mysqli("localhost", "root", "", "kck_pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
