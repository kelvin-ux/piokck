<?php
$mysqli = new mysqli("localhost", "root", "", "kck/pio");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
