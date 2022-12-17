<?php
require 'config.php';

$Hid = $_POST["hid"];
$tno = $_POST["tableno"];
$tp = $_POST["tableprice"];

$sql = "INSERT INTO tables(Hotel_name, Table_No, Table_Price) VALUES ('$Hid', '$tno', '$tp')";

if ($conn->query($sql)) {
	echo "<script>alert('Added new hotel successfully')</script>";
	header("location:tableAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>
