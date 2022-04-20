<?php

$servername = "localhost:3306";
$dBUsername = "mahs_mozzarelamen";
$dBPassword = "mustangs";
$dBName = "mahs_mozzarelamen";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
