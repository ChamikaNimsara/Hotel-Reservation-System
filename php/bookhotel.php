<?php
require 'config.php';

$Hname = $_POST["name"];
$cin = $_POST["indate"];
$cout = $_POST["outdate"];
$nroom = $_POST["num"];
$hprice = $_POST["price"];

$sql = "INSERT INTO reshotels(Hotel_name, checkIN, checkOUT, No_rooms, Price_Per_Room) VALUES ('$Hname', '$cin', '$cout', '$nroom', '$hprice')";

if ($conn->query($sql)) {
	echo "<script>alert('Added new hotel successfully')</script>";
	header("location:loginhotelpage.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
