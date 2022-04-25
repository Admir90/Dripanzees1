<?php
$servername = "localhost:3306";
$dBUsername = "mahs_mozzarelamen";
$dBPassword = "mustangs";
$dBName = "mahs_mozzarelamen";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$rating = mysqli_real_escape_string($link, $_REQUEST['rating']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
$sql = "INSERT INTO reviews (firstName, lastName, rating, message) VALUES ('$first_name', '$last_name', '$rating', '$message')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



?>