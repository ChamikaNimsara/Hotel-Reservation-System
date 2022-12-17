<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM tables WHERE Table_Id = $id";

if ($conn->query($sql)) {
	echo "<script>alert('Deleted successfully')</script>";
	header("location:tableAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>