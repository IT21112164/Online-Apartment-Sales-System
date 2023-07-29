<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROFILE</title>
    <link rel="stylesheet" href="../Lakindu Virajith/NAVIGATION.css">
    <link rel="stylesheet" href="../Lakindu Virajith/BACK_BUTTON.css">
	<link rel="stylesheet" href="../Hashini Ruwanthika/FOOTER.css">
	<link rel="stylesheet" href="PROFILE.css">
    <script type="text/javascript" src="BACK_BUTTON.js"></script>
	<script type="text/javascript" src="PROFILE.js"></script>
</head>
<body>

    <img src="../IMAGES/LOGO.png" id="logo" alt="LOGO" height="74px">

    <ul id="n_bar">
        <li><a href="../Hashini Ruwanthika/HOME.html">Home</a></li>
        <li><a href="../Nipunika Sathsarani/LOCATION.html">Location</a></li>
        <li><a href="../Nipunika Sathsarani/APPARTMENT.html">Apartment</a></li>
        <li><a href="../Chandeepa Isuranga/BOOK_NOW.html">Book Now</a></li>
        <li><a href="CONTACT_US.html">Contact Us</a></li>
        <li><a href="../Hashini Ruwanthika/ABOUT_US.html">About Us</a></li>
    </ul>

    <button id="back_b" onclick="goBack()">BACK</button>

    <hr></hr>

	<div class="box">
		<div class="prof">
			<img src="../IMAGES/PROFILE.jpg" id="pro" alt="Profile" height="100px" width="100px">
			<h1>User Details</h1>
		</div>

		<h2>Manage the account details you are sharded with Our Online Apartment Seles System including your name,contact info and more</h2>
	</div>
	<fieldset>
		<h2>Profile Detailes</h2>
		
		<?php
			echo "Name : " .$_POST["n"]."</br>";
            echo "Address : " .$_POST["address"]."</br>";
			echo "Email : " .$_POST["email"]."</br>";
            echo "Phone Number :" .$_POST["phoneNum"]."</br>";
			
		?>

	</fieldset>
	

	<div class="footer">
        <footer class="footer-distributed">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
            <div class="footer-right">
                <div class="icons"><br>
         
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-instagram"></a>
             <a href="#" class="fa fa-google-plus"></a>
         
            </div>
         </div>
         
            <div class="footer-left">
         
             <p class="footer-links">
              
         <a href="#">Hotline: +94 117 457 767 | +94 770 333 877</a><br>
         
              <a href="#">Apartment Location: CityViews(Pvt) Ltd.Tower, wattala, Sri Lanka</a>
             </p>
         
             <p>All recerved.Terms of use|Privacy policy</p>
            </div>
         
        </footer>
    </div>
	
</body>
</html>