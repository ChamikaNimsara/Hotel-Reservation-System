<?php
require 'config.php';


$sql1 = "DELETE FROM reshotels";
$sql2 = "DELETE FROM restourguides";
$sql3 = "DELETE FROM restables";

if ($conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3)) {
	echo "<script>alert('Payment successful')</script>";

}
else {
	echo "<script>alert('Error: cannot execute ')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fast Booking</title>
</head>
<body>
	<center><h1>Thank You For Your Payment</h1>
		To go back to Home page <a href="Home.php"> Click Here </a>
	</center>

</body>
</html>