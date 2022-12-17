<?php
require 'config.php';

session_start();
$username = $_POST["uname"];
$password = $_POST["pwd"];

$sql = "SELECT * FROM customers WHERE Username = '$username'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{

	while($row = $result->fetch_assoc())
	{
		if(isset($_POST['uname']))
	{
		if($_POST['uname'] == $row["Username"] && $_POST['pwd'] == $row["Password"] )
		{
			$_SESSION['username'] = $_POST['uname'];
			header("Location:Home.php");
		}
		else
		{
			header("Location:login.php");
		}

	}

	}

}

?>