<?php
require 'config.php';

$Hname = $_POST["name"];
$Haddress = $_POST["address"];
$Hcontact = $_POST["contact"];

$sql = "INSERT INTO hotels(Hotel_name, Hotel_Address, Contacts) VALUES ('$Hname', '$Haddress', '$Hcontact')";

if ($conn->query($sql)) {
	echo "<script>alert('Added new hotel successfully')</script>";
	header("location:hotelAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
