<?php
require 'config.php';

$id = $_GET['id'];
$Hname = $_POST["name"];
$Haddress = $_POST["address"];
$Hcontact = $_POST["contact"];

$sql = "UPDATE hotels SET Hotel_name = '$Hname', Hotel_Address = '$Haddress', Contacts = '$Hcontact' WHERE Hotel_Id = $id";

if ($conn->query($sql)) {
	echo "<script>alert('Updated successfully')</script>";
	header("location:hotelAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>