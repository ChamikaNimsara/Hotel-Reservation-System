<?php
require 'config.php';
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Fast Booking</title>
	<link rel="stylesheet" href=" ..\src\styles\styles.css">
	<link rel="stylesheet" href=" ..\src\styles\formStyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style>body {
  		background-color: white;
  		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
</style>

<script>
	function delete_data(id)
	{
		if(confirm('Are you sure you want to delete the record?'))
		{
			window.location.href = 'submitdeletetourguide.php?id='+id;
		}
	}
</script>

</head>
<body>
	<section class="header" style="background-image: url('images/background1.jpg'); min-height: 50vh; background-size: cover !important; opacity: 90%; ">
		<br><center><h1 style="color:white; font-size:40px; font-family: sans-serif;">FAST BOOKING</h1></center>
		<table style="width:100%">

		<tr >
			<td style="width: 25%;">
				<img src="..\src\images\logo3.jpg" alt="Fast Bookintg Logo" width="200" height="200" class="left">
			</td>

			<td style="width: 50%;">
    			<center>
				<a href="index.html"><button type="button" class="btn">Home</button></a>
				<button type="button" class="btn">Hotel</button>
				<button type="button" class="btn">Dine In</button>
				<button type="button" class="btn">Tour Guide</button>
				</center>				
			</td>
				
			<td style="width: 33.33%;">
				<a href="adminLogout.php"> <button type="button" style="float: right;" class="button1">Logout</button> </a>
				<a href="AdminProfilePage.php"> <button type="button" style="float: right;" class="button1">Admin Profile</button> </a>
			</td>
		</tr>
		</table>
	</section>
	
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<ul class="breadcrumb" style="margin: 0; ">
  			<li><a href="adminHome.php">Admin Home</a></li>
  			<li>Tour Guide List</li>
		</ul>
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<br><br>

	<center><h1>Tour Guide List</h1></center><br>
	<table style="width:100%;">
	  <tr>
	  	<th></th>
	    <th style="float: left;">Guide ID</th>
	    <th style="column-width: 100px;">Guide Name</th>
	    <th style="column-width: 80px;">Guide Contact</th>
	    <th style="column-width: 80px;">Guide NIC</th>
	    <th style="column-width: 80px;">Price Per Day</th>
	 </tr>

	<?php
	  		$sql = "SELECT * FROM tourguides";
	  		$result = $conn->query($sql);

	  		if($result->num_rows > 0)
	  		{
	  			while($row = $result->fetch_assoc())
	  			{
	  				$id = $row["Guide_Id"];
					echo  	"<tr>";
					echo	"<td></td><td>" .$row["Guide_Id"]. "</td>";
					echo	"<td>" .$row["Guide_name"]. "</td>";
					echo	"<td>" .$row["Contacts"]. "</td>";
					echo	"<td>" .$row["Guide_NIC"]. "</td>";
					echo	"<td>$" .$row["Price_Per_Day"]. ".00</td>";
					echo	"<td><button type='submit'><a href='edittourguiderecord.php?id=$id'>Edit</a></button></td>";
					echo	"<td><button onclick='delete_data($id)'>Delete</button></td>";
					echo 	"</tr>";
	  			}
	  		}
	  		else echo "<script>alert('No items selected')</script>";


	  ?>
</table>

	<br><br>
	<center><a href="newtourguideAdmin.php" style="text-decoration: none;"> <button type="button" class="button1">Add new Tour Guide</button></a></center>




	<br><br>
<hr style="margin: 0; border: 2px solid black; background-color: black;">
<section class="footer" style="background-color: #F5F5DC; ">
		<br>
		<table style="width:130%; margin-left: 80px;">
			<tr>
				<td><h4>About Us</h4></td>
				<td><h4>Help</h4></td>
				<td><h4>Contact us</h4></td>
				<td><h4>Subscribe to our news letter</h4></td>
			</tr>
			<tr style="color: #4b4c4d;">
				<td><a href="aboutUs.html" style="text-decoration: none; color:#686868;">Our Story</a></td>
				<td><a href="Terms&conditions.html" style="text-decoration: none; color:#686868;">Terms and conditions</a></td>
				<td>
					<div class="social">
						<a href="https://www.instagram.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-instagram"></i></a>
						<a href="https://www.snapchat.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-snapchat"></i></a>
						<a href="https://www.twitter.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-twitter"></i></a>
						<a href="https://www.facebook.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-facebook"></i></a>
					</div>
				</td>
				<td>
					<form action = "#" onsubmit="return" >
						<input type="text" name="email" placeholder="Enter Your Email..." style="width: 250px" required>
					
				</td>
			</tr>
			<tr style="color: #4b4c4d;">
				<td><a href="ContactUs.html" style="text-decoration: none; color:#686868;">Contact us</a></td>
				<td><a href="PrivacyPolicy.html" style="text-decoration: none; color:#686868;">Privacy Policy</a></td>
				<td></td>
				<td>
					<input type="submit" value="Subscribe" style="	background-color: red; font-size: 16px; color: white;" id="submitBtn"></form>
				</td>
			</tr>
		</table>

		<p style="text-align: right; font-size: 13px; color: #aaa;">
			Copyright &copy; 2022. All rights reserved<br><br><br>
		</p>
	</section>
</body>
</html>