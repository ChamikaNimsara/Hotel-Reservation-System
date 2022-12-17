<?php
require 'config.php';
session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <title>Fast Booking</title>
    <link rel="stylesheet" href=" styles/styles.css">
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
                <a href="Home.php"><button type="button" class="btn">Home</button></a>
                <a href="loginhotelpage.php"><button type="button" class="btn">Hotel</button></a>
                <a href="Home.php"><button type="button" class="btn">Dine In</button></a>
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
        
    <?php
            $id = $_GET['tourguides'];
            
            $sql = "SELECT * FROM tourguides WHERE Guide_Id = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc()
            ?>

    <hr style="margin: 0; border: 2px solid black; background-color: black;">
    <ul class="breadcrumb" style="margin: 0; ">
            <li><a href="Home.php">Home</a></li>
            <li><a  href="logintourguidepage.php">Tour Guide Selection</a></li>
            <li><?php echo $row["Guide_name"]; ?></li>
        </ul>
    <hr style="margin: 0; border: 2px solid black; background-color: black;">
    <br>
    <div style="border: solid; padding: 10px; border-radius: 5px; margin: 15px;" class="hotel-info">


        
                <h3><?php echo $row["Guide_name"]; ?></h3>
                <table>
                    <tr>
                        <td>
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width: 200px; height: 200px; " />
                        </td>
                        <td>
                            <div>
                                <fieldset>
                                    <h3>Rating : <?php echo $row["Ratings"]; ?> ⭐</h3>
                                    <h3>
                                        <Address><?php echo $row["Contacts"]; ?></Address>
                                    </h3>
                                </fieldset>
                            </div>
                        </td>
                    </tr>
                </table>

                <br>
                <fieldset>
                    <legend>Reviews</legend>
                    ⭐⭐⭐⭐⭐<br>
                    Good personality. Came right on time.
                    <br><br>⭐⭐⭐⭐<br>
                    Friendly. Gave us a lot of valuble information<br>
                </fieldset>
<br>
        
        <form action = "booktourguide.php" class="frm" method="post" enctype="multipart/form-data">
            Guide Name:
            <input type="text" name="name" value="<?php echo $row["Guide_name"]; ?>" required><br/><br/>
            Date:
            <input type="date" name="date" required><br/><br/>
            Type of Vehicle:
            <select name="vehicles" id="vehicles">
                <option value="Car">Car</option>
                <option value="Van">Van</option>
                <option value="Threewheeler">Threewheeler</option>
                <option value="Bus">Bus</option>
            </select>
            Number of Days:
            <input type="text" name="days" required><br/><br/>
            Price Per Day:
            <input type="text" name="price" value="<?php echo $row["Price_Per_Day"]; ?>" required><br/><br/>

            <button class="button1" type="submit"> 
                Book Now
            </button>
        </form>

</div>

        <br>
        <hr style="margin: 0; border: 2px solid black; background-color: black;">
        <section class="footer" style="background-color: #F5F5DC; ">

            <table style="width:130%; margin-left: 80px;">
                <tr>
                    <td>
                        <h4>About Us</h4>
                    </td>
                    <td>
                        <h4>Help</h4>
                    </td>
                    <td>
                        <h4>Contact us</h4>
                    </td>
                    <td>
                        <h4>Subscribe to our news letter</h4>
                    </td>
                </tr>
                <tr style="color: #4b4c4d;">
                    <td><a href="aboutUs.html" style="text-decoration: none; color:#686868;">Our Story</a></td>
                    <td><a href="Terms&conditions.html" style="text-decoration: none; color:#686868;">Terms and conditions</a></td>
                    <td>
                        <div class="social">
                            <a href="https://www.instagram.com" style="color: #4b4c4d; font-size: 24px;"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.snapchat.com" style="color: #4b4c4d; font-size: 24px;"><i
                                    class="fab fa-snapchat"></i></a>
                            <a href="https://www.twitter.com" style="color: #4b4c4d; font-size: 24px;"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com" style="color: #4b4c4d; font-size: 24px;"><i
                                    class="fab fa-facebook"></i></a>
                        </div>
                    </td>
                    <td>
                        <form action="#" onsubmit="return">
                            <input type="text" name="email" placeholder="Enter Your Email..." style="width: 250px"
                                required>

                    </td>
                </tr>
                <tr style="color: #4b4c4d;">
                    <td><a href="ContactUs.html" style="text-decoration: none; color:#686868;">Contact us</a></td>
                    <td><a href="PrivacyPolicy.html" style="text-decoration: none; color:#686868;">Privacy Policy</a></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Subscribe"
                            style="	background-color: red; font-size: 16px; color: white;" id="submitBtn"></form>
                    </td>
                </tr>
            </table>

            <p style="text-align: right; font-size: 13px; color: #aaa;">
                Copyright &copy; 2022. All rights reserved<br><br><br>
            </p>
        </section>

</body>

</html>