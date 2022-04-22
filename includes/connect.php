<?php



$conn = mysqli_connect("localhost:3306", "mahs_mozzarelamen", "mustangs", "mahs_mozzarelamen");
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$rating = $_POST['rating'];
$message = $_POST['message'];

$sql = "INSERT INTO 'reviews' ('id', 'firstName', 'lastName', 'rating', 'message') 
VALUES ('0', '$firstName', '$lastName', '$rating', '$message')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>