<?php
require 'config.php';

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$country = $_POST["country"];
$address = $_POST["address"];
$dob = $_POST["birthday"];
$email = $_POST["email"];
$mno = $_POST["mobile"];
$username = $_POST["username"];
$password = $_POST["Password"];

$sql = "INSERT INTO customers(Fname, Lname, DOB, Contacts, Email, Country, Address, Username, Password) VALUES ('$fname', '$lname', '$dob', '$mno', '$email', '$country', '$address', '$username', '$password')";

if ($conn->query($sql)) {
	echo "<script>alert('Registered successfully')</script>";
	header("location:index.html");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>

