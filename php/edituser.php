<?php
require 'config.php';
session_start();
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
				a href="Home.php"><button type="button" class="btn">Home</button></a>
                <a href="loginhotelpage.php"><button type="button" class="btn">Hotel</button></a>
                <a href="logintablepage.php"><button type="button" class="btn">Dine In</button></a>
                <a href="logintourguidepage.php"><button type="button" class="btn">Tour Guide</button></a>
				</center>				
			</td>
				
			<td style="width: 33.33%;">
				<a href="UserProfilePage.php"> <button type="button" style="float: right; " class="button1">User Profile</button> </a>
                <a href="customerLogout.php"> <button type="button" style="float: right; " class="button1">Logout</button> </a>
			</td>
		</tr>
		</table>
	</section>
	
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<ul class="breadcrumb" style="margin: 0; ">
            <li><a href="Home.php">Home</a></li>
            <li><a href="UserProfilePage.php">User Profile</a></li>
            <li>Edit User</li>
        </ul>
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<br>

	<?php
		$id = $_SESSION['username'];
        $sql = "SELECT * FROM customers WHERE Username = '$id'";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
	  		{
	  			$Fname = $row["Fname"];
	  			$Lname = $row["Lname"];
	  			$DOB = $row["DOB"];
	  			$contact = $row["Contacts"];
	  			$email = $row["Email"];
	  			$country = $row["Country"];
	  			$address = $row["Address"];
	  			$username = $row["Username"];
	  			$password = $row["Password"];
	  		}
		} 
		else echo "<script>alert('No items selected')</script>";
	?>

	<form method="post" action = "submitedituser.php?id=<?php echo $id; ?>" class="frm">
		First Name:</br>
		<input type="text" name="fname" value="<?php echo $Fname; ?>" required><br/><br/>
		Last Name:</br>
		<input type="text" name="lname" value="<?php echo $Lname; ?>" required><br/><br/>
		Date of Birth:</br>
		<input type="text" name="date" value="<?php echo $DOB; ?>" required><br/><br/>
		Contact:</br>
		<input type="text" name="contact" value="<?php echo $contact; ?>" required><br/><br/>
		E-mail:</br>
		<input type="text" name="email" value="<?php echo $email; ?>" required><br/><br/>
		Address:</br>
		<input type="text" name="address" value="<?php echo $address; ?>" style="width: 500px; height: 50px;" required><br/><br/>
		Country:</br>
		<input type="text" name="country" value="<?php echo $country; ?>" required><br/><br/>
		Username:</br>
		<input type="text" name="username" value="<?php echo $username; ?>" required><br/><br/>
		Password:</br>
		<input type="text" name="password" value="<?php echo $password; ?>" required><br/><br/>
		<center><input type="submit" value="Update" class="button1"></center>
	</form>

	
		



	<br>
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

		<p style="text-align: right; font-size: 13px; color: #aaa;">
			Copyright &copy; 2022. All rights reserved<br><br><br>
		</p>
	</section>
</body>
</html>