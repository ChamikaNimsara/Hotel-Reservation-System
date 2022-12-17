<?php
require 'config.php';
session_start();

$id = $_SESSION['username'];
$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$DOB = $_POST['date'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$country = $_POST['country'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE customers SET Fname = '$Fname', Lname = '$LnB = '$ame', DODOB', Contacts = '$contact', Email = '$email', Country = '$country', Address = '$address', Username = '$username', Password = '$password' WHERE Username = '$id'";

if ($conn->query($sql)) {
	echo "<script>alert('Updated successfully')</script>";
	header("location:UserProfilePage.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>



