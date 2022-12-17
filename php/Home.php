<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Fast Booking</title>
	<link rel="stylesheet" href=" styles/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/wrapper2.css">
	<link rel="stylesheet" href="css/testimonials.css">
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
		<a href="payment.php"> <button type="button" style="float: right; " class="button1">Payment</button> </a>
	</section>
	<hr style="margin: 0; border: 2px solid black; background-color: black;">
		<br><br>
<!--This code is influenced by W3school. But edited and added my own coding accordingly, (https://www.w3schools.com/howto/howto_js_slideshow.asp)-->
<!--Slideshow container-->
<div class="slideshow-container">

	<!-- Full-width images with number and caption text -->
	<div class="mySlides fade">
	<img src="images/ss3.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	<img style="height:450px; width:100%;" src="images/ss6.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/ss1.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img style="height:450px; width:100%;" src="images/ss4.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img style="height:450px; width:100%;" src="images/ss7.jpg" style="width:100%">
	</div>
	
	<!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<!-- The dots/circles -->
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	<span class="dot" onclick="currentSlide(4)"></span>
	<span class="dot" onclick="currentSlide(5)"></span>
</div>

<script src="js/slider.js"></script>


	<h2><center>Best properties in Sri Lanka</center></h2>
	<!--flexbox of top destinations-->
	<div class="flex-container">
		<!--<center><h2>Top destinations in Sri Lanka</h2></center>-->
		
		<div class="item1">
			<a href="loginhotel.php?hotels=1"><img style="width:240px; height:190px;" class="dasimages" src="images/Hotels/gallefacehotel.jpg" width=100% /></a>
			<h3><center>Galle Face Hotel</center><h3>
		</div>	
		
		<div class="item2">
			<a href="loginhotel.php?hotels=2"><img style="width:240px; height:190px;" class="dasimages" src="images/Hotels/kingsburyhotel.jpg" width=100% /></a>
			<h3><center>Kingsbury Hotel</center><h3>
		</div>	
		
		<div class="item3">
			<a href="loginhotel.php?hotels=3"><img style="width:240px; height:190px;" class="dasimages" src="images/Hotels/junglebeachhotel.jpg" width=100% /></a>
			<h3><center>Jungle Beach Hotel</center><h3>
		</div>	
		
		<div class="item4">
			<a href="loginhotel.php?hotels=4"><img style="width:240px; height:190px;" class="dasimages" src="images/Hotels/cinnamongrandhotel.jpg" width=100% /></a>
			<h3><center>Cinnamon Grand Hotel</center><h3>
		</div>	
		
		<div class="item5">
			<a href="loginhotel.php?hotels=5"><img style="width:240px; height:190px;" class="dasimages" src="images/Hotels/cinnamonlakesidehotel.jpg" width=100% /></a>
			<h3><center>Cinnamon Lakeside Hotel</center><h3>
		</div>	
	</div>
	
	<h2><center>Top destinations in Sri Lanka</center></h2>
	<!--This code is influenced by W3school. But edited and added my own coding accordingly,(https://www.w3schools.com/css/css3_flexbox.asp)-->
	<!--got an idea how to do the flexbox coding from this web page, (https://css-tricks.com/snippets/css/a-guide-to-flexbox/)-->
	<!--flexbox of best properties-->
	<div class="flex-container">
		<!--<center><h2>Top destinations in Sri Lanka</h2></center>-->
		
		<div class="item1">
			<a href="https://www.google.com/maps/place/Kandy/@7.2933947,80.5476573,11.74z/data=!4m5!3m4!1s0x3ae366266498acd3:0x411a3818a1e03c35!8m2!3d7.2905715!4d80.6337262"><img style="width:240px; min-height:190px;" class="dasimages" src="images/Kandy.jpeg" width=100% /></a>
			<h3><center>Kandy</center><h3>
		</div>	
		
		<div class="item2">
			<a href="https://www.google.com/maps/place/Galle/@6.0558913,80.1944874,14z/data=!3m1!4b1!4m5!3m4!1s0x3ae173bb6932fce3:0x4a35b903f9c64c03!8m2!3d6.0328948!4d80.2167912"><img style="width:240px; min-height:190px;" class="dasimages" src="images/Galle.jpg" width=100% /></a>
			<h3><center>Galle</center><h3>
		</div>	
		
		<div class="item3">
			<a href="https://www.google.com/maps/place/Matara/@5.9519911,80.5157285,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae138d151937cd9:0x1d711f45897009a3!8m2!3d5.9496309!4d80.5468529"><img style="width:240px; min-height:190px;" class="dasimages" src="images/Matara.jpg" width=100% /></a>
			<h3><center>Matara</center><h3>
		</div>	
		
		<div class="item4">
			<a href="https://www.google.com/maps/place/Hambantota/@6.2753496,80.8772592,10z/data=!3m1!4b1!4m5!3m4!1s0x3ae69f8169ab7feb:0xa560084b8ced7c6f!8m2!3d6.1535816!4d81.127149"><img style="width:240px; min-height:190px;" class="dasimages" src="images/Hambanthota.jpg" width=100% /></a>
			<h3><center>Hambanthota</center><h3>
		</div>	
		
		<div class="item5">
			<a href="https://www.google.com/maps/place/Nuwara+Eliya/@6.9513649,80.7459275,13z/data=!3m1!4b1!4m5!3m4!1s0x3ae380434e1554c7:0x291608404c937d9c!8m2!3d6.9497166!4d80.7891068"><img style="width:240px; min-height:190px;" class="dasimages" src="images/Nuwaraeliya.jpg" width=100% /></a>
			<h3><center>Nuwaraeliya</center><h3>
		</div>	
	</div>
	
	<!--got an idea on how to do the testimonials sections, by browsing internet, but created my own testimonials sections, so, can't say exact references used-->
	<!--testimonials section-->
	<h2><center>Overheard from travelers</center></h2>
	<div class="testimonials">
	
	<!--card 1-->
	<div class="card">
		<div class="layer"></div>
		<div class="content">
			<div class="details"><h1 style=" font-size: 25px; color: white">Richard Branson<br></h1></div>
			<p>I have used FastBooking.com for many years. I always read reviews from other guests before actually booking and always book a room that I can cancel if I need to. </p>
			<div class="image"><img style="width:100px; height:100px;" src="images/rbranson.jpg"></div>
            <div class="details"><h2>Richard Branson<br><span>Business Magnate</span></h2></div>
		</div>
	</div>
	
	<!--card 2-->
	<div class="card">
		<div class="layer"></div>
		<div class="content">
			<div class="details"><h1 style=" font-size: 25px; color: white">PewDiePie<br></h1></div>
			<p>Never had problems with Fastbooking, booked about 20 times alread. Good Service. They have excellent prices and the experience was really outstanding. </p>
			<div class="image"><img style="width:100px; height:100px;" src="images/pewdiepie.jpg"></div>
            <div class="details"><h2>PewDiePie<br><span>YouTuber</span></h2></div>
		</div>
	</div>
	
	<!--card 3-->
	<div class="card">
		<div class="layer"></div>
		<div class="content">
			<div class="details"><h1 style=" font-size: 25px; color: white">Taylor Swift<br></h1></div>
			<p>Due to COVID I had to cancel bookings that were "non refundable". FastBooking.com worked with me until I received my refunds. I have had great experiences with booking through them.</p>
			<div class="image"><img style="width:80px; height:100px;" src="images/taylorswift.png"></div>
            <div class="details"><h2>Taylor Swift<br><span>Singer</span></h2></div>
		</div>
	</div>
	
	</div>
	<!--end of testimonials section-->
	

	

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
						<a href="https://www.facebook.com/fastbookingsl" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-facebook"></i></a>
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