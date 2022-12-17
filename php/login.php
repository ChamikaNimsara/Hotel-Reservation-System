<?php
session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Fast Booking</title>
	<link rel="stylesheet" href=" styles/styles.css">
	<link rel="stylesheet" href=" ..\src\styles\formStyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>body {
  		background-color: white;
  		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}</style>
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
				<a href="hotel page.php"><button type="button" class="btn">Hotel</button></a>
				<button type="button" class="btn">Dine In</button>
				<button type="button" class="btn">Tour Guide</button>
				</center>				
			</td>
				
			<td style="width: 33.33%;">
			</td>
		</tr>
		</table>
	</section>
	

	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<ul class="breadcrumb" style="margin: 0; ">
        <li><a href="..\src\index.html">Home</a></li>
        <li>Login</li>
        </ul>
    <hr style="margin: 0; border: 2px solid black; background-color: black;">

	<br><br>

	<form method="post" action = "customerConfirm.php" class="frm">
		Username:</br>
		<input type="text" name="uname" required><br/><br/>
		Password:</br>
		<input type="text" name="pwd" required><br/><br/>
		<center><input type="submit" value="Login" class="button1"></center>
		<label style="float:left"> Doesn't have an account? &nbsp 
			<a href="register.html">Register</a></label>
	</form>

	<br><br>
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<section class="footer" style="background-color: #F5F5DC; ">

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

		<br><br><br><br>

		<p style="text-align: right; font-size: 13px; color: #aaa;">
			Copyright &copy; 2022. All rights reserved<br><br><br>
		</p>
	</section>

</body>
</html>