<?php
require 'config.php';

$id = $_GET['id'];
$Tname = $_POST["name"];
$Tcontact = $_POST["contact"];
$Tnic = $_POST["guidenic"];
$Tprice = $_POST["price"];

$sql = "UPDATE tourguides SET Guide_name = '$Tname', Contacts = '$Tcontact', Guide_NIC = '$Tnic', Price_Per_Day = '$Tprice' WHERE Guide_Id = $id";

if ($conn->query($sql)) {
	echo "<script>alert('Updated successfully')</script>";
	header("location:tourGuideAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>