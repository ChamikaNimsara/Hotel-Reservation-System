<?php
require 'config.php';

$id = $_GET['id'];
$Hid = $_POST["hid"];
$tno = $_POST["tableno"];
$tp = $_POST["tableprice"];

$sql = "UPDATE tables SET Hotel_name = '$Hid', Table_No = '$tno', Table_Price = '$tp' WHERE Table_Id = $id";

if ($conn->query($sql)) {
	echo "<script>alert('Updated successfully')</script>";
	header("location:tableAdmin.php");
}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>