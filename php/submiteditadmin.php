<?php
require 'config.php';
session_start();

$id = $_SESSION['username'];
$name = $_POST['name'];
$title = $_POST['title'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE admins SET Admin_Name = '$name', Admin_title = '$title', Admin_Contact = '$contact', Username = '$username', Password = '$password' WHERE Username = '$id'";

if ($conn->query($sql)) {
	echo "<script>alert('Updated successfully')</script>";
	header("location:AdminProfilePage.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>



