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
				<a href="Home.php"><button type="button" class="btn">Home</button></a>
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
  			<li><a href="Home">Home</a></li>
  			<li>Payment Page</li>
		</ul>
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
	<br>

	<div class="row">
  	<div class="column">
    <h4>Choose Payment Methood</h4>
    
    <table style="width: 200px">
		<tr>
			<td><a href="https://www.mastercard.us/en-us.html"><img src="images\payment\MasterCard.png" alt="Payment methods" width="50" height="25" class="left"></a></td>
			<td><a href="https://www.visa.com.lk/"><img src="images\payment\Visa.png" alt="Payment methods" width="50" height="25" class="left"></a></td>
		</tr>
		<tr>
			<td><a href="https://www.unionpayintl.com/en/"><img src="images\payment\UnionPay.png" alt="Payment methods" width="50" height="25" class="left"></a></td>
			<td><a href="https://www.americanexpress.com/"><img src="images\payment\AmericanExpress.png" alt="Payment methods" width="50" height="25" class="left"></a></td>
		</tr>    	
    </table>

    <h4>Debit / Credit Card</h4>

    <form action = "#" class="fr">
    	Enter Card Number:</br>
		<input type="text" name="firstname" pattern="[0-9]{16}" required><br/><br/>
		Valid Date:</br>
		<input type="text" name="firstname" pattern="[0-9]{2}+/+[0-9]{2}" required><br/><br/>
		CVV:</br>
		<input type="text" name="firstname" pattern="[0-9]{3}" required><br/><br/>
		<input type="text" name="firstname" placeholder="Promo Code" pattern="[0-9]{6}" required><br/><br/>
		<input type="submit" class="button1" value="Apply">
	</form>
  	</div>
  
  	<div class="column">
  	<br><br><br><br><br>
  	<b>Hotel:</b>
    <table style="width:70%;">
	  <tr>
	  	<th></th>
	    <th>Order</th>
	    <th>Check In</th>
	    <th>Check Out</th>
	    <th>No of Rooms</th>
	    <th>Price</th>
	  </tr>

	  <?php
	  		$total = 0;
            $sql = "SELECT * FROM reshotels";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo    "<tr>";
                    echo    "<td></td><td>" .$row["Hotel_name"]. "</td>";
                    echo    "<td>" .$row["checkIN"]. "</td>";
                    echo    "<td>" .$row["checkOUT"]. "</td>";
                    echo    "<td>" .$row["No_rooms"]. "</td>";
                    echo    "<td>$" .$row["No_rooms"]*$row["Price_Per_Room"]. ".00</td>";
                    echo    "</tr>";
                    $total += $row["No_rooms"]*$row["Price_Per_Room"];
                }
            }
      ?>

	</table>
	<br><br>
	<b>Tour Guide:</b>
	<table style="width:70%;">
	  <tr>
	  	<th></th>
	    <th>Order</th>
	    <th>Date</th>
	    <th>Vehicle Type</th>
	    <th>No of Days</th>
	    <th>Price</th>
	  </tr>

	  <?php
            $sql = "SELECT * FROM restourguides";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo    "<tr>";
                    echo    "<td></td><td>" .$row["Guide_name"]. "</td>";
                    echo    "<td>" .$row["Date"]. "</td>";
                    echo    "<td>" .$row["Vehicle_Type"]. "</td>";
                    echo    "<td>" .$row["No_days"]. "</td>";
                    echo    "<td>$" .$row["No_days"]*$row["Price_Per_Day"]. ".00</td>";
                    echo    "</tr>";
                    $total += $row["No_days"]*$row["Price_Per_Day"];
                }
            }
      ?>

	</table>
	<br><br>
	<b>Table:</b>
	<table style="width:70%;">
	  <tr>
	  	<th></th>
	    <th>Order</th>
	    <th>Date</th>
	    <th>Type</th>
	    <th>No of People</th>
	    <th>Price</th>
	  </tr>

	  <?php
            $sql = "SELECT * FROM restables";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo    "<tr>";
                    echo    "<td></td><td>" .$row["Hotel_name"]. "</td>";
                    echo    "<td>" .$row["Date"]. "</td>";
                    echo    "<td>" .$row["Time"]. "</td>";
                    echo    "<td>" .$row["No_People"]. "</td>";
                    echo    "<td>$" .$row["No_People"]*$row["Price_Per_Person"]. ".00</td>";
                    echo    "</tr>";
                    $total += $row["No_People"]*$row["Price_Per_Person"];
                }
            }
      ?>

	</table>


  	</div>
	</div>

<?php 
	echo    "<h2><center>Total Payment: $" .$total. ".00</center></h2>";
?>

<center>
	<a href="pay.php"> <button type="button" style="text-decoration: none;" class="button1">Pay Now</button> </a>
</center>
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