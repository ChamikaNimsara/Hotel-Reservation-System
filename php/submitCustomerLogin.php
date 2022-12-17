<?php
require 'config.php';

$username = $_POST["username"];
$password = $_POST["Password"];

$sql = "INSERT INTO customer_Login(Username, Password) VALUES ('$username', '$password' )";
if ($conn->query($sql)) {
	echo "<script>alert('Registered successfully')</script>";
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
