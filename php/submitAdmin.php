<?php
require 'config.php';

$aname = $_POST["adminname"];
$title = $_POST["admintitle"];
$aemail = $_POST["adminphone"];
$username = $_POST["username"];
$password = $_POST["Password"];

$sql = "INSERT INTO Admins(Admin_Name, Admin_title, Admin_Contact, Username, Password) VALUES ('$aname', '$title', '$aemail', '$username', '$password' )";

if ($conn->query($sql)) {
	echo "<script>alert('Registered successfully')</script>";
	header("location:AdminHome.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>