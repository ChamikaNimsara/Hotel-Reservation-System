<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM tourguides WHERE Guide_Id = $id";

if ($conn->query($sql)) {
	echo "<script>alert('Deleted successfully')</script>";
	header("location:tourGuideAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>