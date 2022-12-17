<?php
require 'config.php';

$Hname = $_POST["name"];
$date = $_POST["date"];
$time = $_POST["time"];
$npeople = $_POST["num"];
$tprice = $_POST["price"];

$sql = "INSERT INTO restables(Hotel_name, Date, Time, No_People, Price_Per_Person) VALUES ('$Hname', '$date', '$time', '$npeople', '$tprice')";

if ($conn->query($sql)) {
	echo "<script>alert('Added new hotel successfully')</script>";
	header("location:loginhotelpage.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
