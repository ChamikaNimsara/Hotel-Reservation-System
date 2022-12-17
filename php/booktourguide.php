<?php
require 'config.php';

$Gname = $_POST["name"];
$Gdate = $_POST["date"];
$vtype = $_POST["vehicles"];
$days = $_POST["days"];
$Gprice = $_POST["price"];

$sql = "INSERT INTO restourguides(Guide_name, Date, Vehicle_Type, No_days, Price_Per_Day) VALUES ('$Gname', '$Gdate', '$vtype', '$days', '$Gprice')";

if ($conn->query($sql)) {
	echo "<script>alert('Added new hotel successfully')</script>";
	header("location:logintourguidepage.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
