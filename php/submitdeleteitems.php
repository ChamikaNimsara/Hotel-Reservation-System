<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM hotels WHERE Hotel_Id = $id";

if ($conn->query($sql)) {
	echo "<script>alert('Deleted successfully')</script>";
	header("location:hotelAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>