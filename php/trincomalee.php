<!DOCTYPE HTML>
<html>
<head>
<title>Fast Booking</title>
	<style>
        body {
        background-color: white;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
        }

        ul.breadcrumb li {
                display: inline;
                font-size: 18px;
            }

        ul.breadcrumb li + li:before {
                    padding: 8px;
                    color: black;
                    content: "/\00a0";
                }

        ul.breadcrumb li a {
                    color: #0275d8;
                    text-decoration: none;
                }

         ul.breadcrumb li a:hover {
                        color: #01447e;
                        text-decoration: underline;
                    }
        .btn {
            float: center;
            border: 2px solid black;
            color: solid black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            padding: 14px 40px;
            background-color: white;
            display: inline-block;
            border-radius: 12px;
        }

        .btn:hover {
                background-color: black;
                color: white;
            }
        .btn:visited{
            color:darkgrey;
        }

        .button1 {
            background-color: #2F4F4F;
            font-size: 16px;
            padding: 14px 40px;
            border-radius: 12px;
            color: white;
            display: block;
            cursor: pointer;
        }

        .button1:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }
	       #search{
            float:right;
            font-size:16px;
        }
        .social {
            color: #4b4c4d;
        }



        .social a {
                font-size: 24px;
                color: inherit;
                border: 1px solid #ccc;
                width: 40px;
                height: 40px;
                line-height: 38px;
                display: inline-block;
                text-align: center;
                border-radius: 50%;
                margin: 0 8px;
                opacity: 0.75;
            }

        .social a:hover {
                    opacity: 0.9;
                }

        .subs {
            background-color: red;
            font-size: 16px;
            color: white;
        }

        .col {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .rw::after {
            content: "";
            clear: both;
            display: table;
        }

        .wrapper {
            display: flex;
            flex-direction: row;
            align-items: center
        }
		        .column{
            float:left;
            width:50%;
            padding:5px;
        }
        .row::after{
            content:"";
            clear:both;
            display:table;
        }
		       *{
            box-sizing:border-box;
        }
		



	</style>
	<script src="../src/javascript/dinein.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!--header -->
    <section class="header" style="background-image: url('images/background1.jpg'); min-height: 50vh; background-size: cover !important; opacity: 90%; margin: 15px;">
        <br><center><h1 style="color:white; font-size:40px; font-family: sans-serif;">FAST BOOKING</h1></center>
        <table style="width:100%">

            <tr>
                <td style="width: 25%;">
                    <img src="..\src\images\logo3.jpg" alt="Fast Bookintg Logo" width="200" height="200" class="left">
                </td>

                <td style="width: 50%;">
                    <center>

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
        <li>Dine in</li>
		<li>UGA JUNGLE BEACH</li>
    </ul>


    <hr style="margin: 0; border: 2px solid black; background-color: black;">
    <br>
	<!--content -->
	
	<h1><b>UGA JUNGLE BEACH TRINCOMALEE HOTEL</b></h1>
	<br>
	
	<p>Simply known as Uga Jungle Beach, this Sri Lanka beach resort stylishly incorporates its existing environs into its design 
	and experience. Blending in with its surrounding flora, the resort looks and feels like a luxurious tree house. Situated in close
	proximity to Trincomalee city, our picturesque Sri Lanka resort with private pool options, offers a unique blend of exhilarating 
	adventure activities and sightseeing opportunities – which display its inimitable cultural landscape. We offer you the perfect base
	to explore the numerous attractions along the scenic eastern coast of the island, or you can simply bask in the lap of luxurious relaxation 
	with our catalogue of spa treatments. Our selection of rooms also places us in a unique position among the Trincomalee hotels, as we offer
	you beach view, jungle view, and lagoon view rooms.</p>
	<div class="row">
		<div class="column">
			<img src="../src/images/uga1.jpg" >
		</div>
		
		<div class="column">
			<img src="../src/images/uga2.jpg" >
		</div>		
	</div>
	<div class="row">
		<div class="column">
			<img src="../src/images/uga3.jpg" >
		</div>
		
		<div class="column">
			<img src="../src/images/uga4.jpg" >
		</div>		
	</div>	
	
	<!--menu of the restaurant-->
	<div>
	<h2>Menu</h2><br>
	<a href="../src/menus2.html" target="_blank">
	<img src="../src/images/menu2.jpg" width="200" ><a>
	</div>
	
	<div>
	<h3><b>Proceed for reservation  &nbsp </b></h3> 
	<button type="button" class="button1" onclick="reservation()" id="reserve"> Reserve</button>
	</div>
	
	
	<br>
	
	<!--footer -->	
    <hr style="margin: 0; border: 2px solid black; background-color: black;">
    <section class="footer" style="background-color: #F5F5DC; ">

        <table style="width:130%; margin-left: 10px;">
            <tr>
                <td><h4><a href="aboutUs.html">About Us</a></h4></td>
                <td><h4>Help</h4></td>
                <td><h4>Contact us</h4></td>
                <td><h4>Subscribe to our news letter</h4></td>
            </tr>
            <tr style="color: #4b4c4d;">
                <td>Our Story</td>
                <td>Terms and conditions</td>
                <td>
                    <div class="social">
                        <a href="https://www.instagram.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.snapchat.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-snapchat"></i></a>
                        <a href="https://www.twitter.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com" style="color: #4b4c4d; font-size: 24px;"><i class="fab fa-facebook"></i></a>
                    </div>
                </td>
                <td>
                    <form action="#" onsubmit="return">
                        <input type="text" name="email" placeholder="Enter Your Email..." style="width: 250px" required>

                </td>
            </tr>
            <tr style="color: #4b4c4d;">
                <td>Contact us</td>
                <td>Privacy Policy</td>
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