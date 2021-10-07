<?php
require 'config.php';





?>


<!DOCTYPE html>
<html>
<head>
		<title> Product Page </title>
		
				<!--Link Style sheet-->
		<link rel="stylesheet" href="../../../Zumry/CSS/Product2.css">
		<link rel="stylesheet" href="../../../Zumry/CSS/Product.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script src="../../../Zumry/JavaScript/HomeScript.js"></script>

</head>
<body id="BGI">
<!-- Header Part -->
<div class="leftt">
	<div class="headerFooter">
		
			<div class="logoP">
				<a href="../../../Zumry/Login.php"><img src="../../Images/Logo.png" alt="MainLogo" class="logo"></a>
			
			</div>
				
			
		
			<div class="name">
					<h1>TRAVEL PLANNER.CO</h1>
			</div>
			
			<div class="Search">
				<div class="align" align="sub">
					<form action="#">
					<input type="text" id="Sch" placeholder="Search..">
					<button id="btn3" class="otherallButton">
					</button>
					</form>
				</div>
			</div>
				
			<div class="logoP">
					<a href="../../../Muhassan/UserDetails.html">
					<img src="../../Images/UserLogo.png" alt="UserLogo" class="logo">
					</a>
			</div>
				
			<div class="logoP padding">
					<a href="../../../Zumry/Login.php"><button class="otherallButton" >LOG IN</button> </a> <br><br> 
					<a href="../../../Zumry/SignUp.php"><button class="otherallButton">SIGN UP</button> </a>
			</div>

		
		<div class="buttonGroup">
			<a href="../../Home.php"> <button class="button btnsize">HOME</button> </a>
			<a href="../../ProductListingPage.php"> <button class="button btnsize">HOTELS</button> </a>
			<a href="../../../Nusky/Reservation.php"> <button class="button btnsize">RESERVATION</button> </a>
			<a href="../../../Muhassan/about.php"> <button class="button btnsize">ABOUT US</button> </a>
		</div>
	</div>	
</div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- Body Content -->
<hr>
<div class="left">
	<div class="Album">
		
		<?php
            $query = "SELECT * FROM room ORDER BY RoomID ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
					
                   ?>

					<div class="gallery">
							<img src="<?php echo $row["Room_imgPath"];?>">
								<div class="desc">
								<div class="d1"><label id="RoomName"> <?php echo $row["Room_Name"]; ?></label></div>
								<div class="d1"><label id="RoomName"> Deluxe Room </label></div>
								<div class="d3"> <label id="location"> <?php echo $row["Room_Desc"]; ?> </label> 

								</div>
								<div class="d2"><label id="Rs">LKR <?php echo $row["Amount"]; ?> </label>
								<label id="location"> Per-Night </label></div>
								<div class="d2"><a href="../Muhassan/Cart.php?id=<?php echo $row["RoomID"];?>"><button> Book Now </button></a></div>
							</div>
					</div>
					<?php
                }
            }
        ?>

			

			
		
	</div>
</div>			

<hr>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- Footer Part -->
<div class="leftt">
	<div class="headerFooter">

				<div class="Rights padding2">
					<label class="labclass">@2019 TRAVEL PLANNER.CO<br>ALL RIGHTS RESERVED</label><br>
					<a href="#">Privacy policy</a>&ensp;
					<a href="#">Terms of use</a>&ensp;
					<a href="#">Site Map</a>
				</div>
				
				
				<div class="explore padding2">
					<label class="labclass">EXPLORE</label><br>
					<a href="../Muhassan/about.html"> About Us </a><br>
					<a href="../Nusky/ContactUs.html"> Contact Us </a><br>
					<a href="#">Blog</a>
				</div>
				
				<div class="pay padding2">
					<div class="align1">
						<a href="https://www.americanexpress.com/"><img src="../../Images/AM.png" alt="paylog1" class="Op1"></a>&emsp;
						<a href="https://usa.visa.com/"><img src="../../Images/Vs.png" alt="paylog2" class="Op2"></a>&emsp;
						<a href="https://www.mastercard.us/en-us.html"><img src="../../Images/Ms.png" alt="paylog3" class="Op1"></a>&emsp;
						<a href="https://www.paypal.com/"><img src="../../Images/PayPal.png" alt="paylog4" class="Op1"></a>
					</div>
				</div>
				
				<div class="socialM padding2">
						<center><label class="labclass">Rate Us</label><br>
						<a href="">
							<img src="../../Images/Star.png" alt="Starimg1" class="star">
							<img src="../../Images/Star.png" alt="Starimg2" class="star">
							<img src="../../Images/Star.png" alt="Starimg3" class="star">
							<img src="../../Images/Star.png" alt="Starimg4" class="star">
							<img src="../../Images/Star.png" alt="Starimg5" class="star">
						</a><br>
						<a href="https://www.facebook.com/" target="_blank"><img src="../../Images/FB.png" alt="Sociallog1" class="Op1"></a>&emsp;
						<a href="https://twitter.com/login?lang=en" target="_blank"><img src="../../Images/Tr.png" alt="Sociallog2" class="Op1"></a>&emsp;
						<a href="https://www.instagram.com/?hl=en" target="_blank"><img src="../../Images/IS.png" alt="Sociallog3" class="Op1"></a>&emsp;
						<a href="https://aboutme.google.com/u/0/?referer=gplus" target="_blank"><img src="../../Images/G+.png" alt="Sociallog4" class="Op1"></a>
						</center>
				</div>
				
				<div class="help padding2">

						<button class="btn otherallButton" id="bt1">Help & Support</button><br><br>
						<button class="btn otherallButton" >Feedback</button>
				</div>
		
	</div>
</div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


</body>


</html>