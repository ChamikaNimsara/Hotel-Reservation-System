<?php
require 'config.php';

$Tname = $_POST["name"];
$Tcontact = $_POST["contact"];
$Tnic = $_POST["guidenic"];
$Tprice = $_POST["price"];

$sql = "INSERT INTO tourguides(Guide_name, Contacts, Guide_NIC, Price_Per_Day) VALUES ('$Tname', '$Tcontact', '$Tnic', '$Tprice')";

if ($conn->query($sql)) {
	echo "<script>alert('Added new hotel successfully')</script>";
	header("location:tourGuideAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
