<?php /* session_start();

if (!isset($_SESSION["user_name"]) && !isset($_SESSION['password'])) {
     header("location: signin.php");
     }
*/
?> 
<!DOCTYPE html>
<html>
<title>Restaurant - ORDER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
	
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>

<style>
body {font-family: Raleway, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
	
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

	.button2 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
	
	.packageTitle{color: #00477e;}
</style>	

<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Help</button>
  <span class="w3-bar-item w3-right">SLL Platform</span>
</div>

<?php echo file_get_contents("navigation-orderform.html"); ?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-wpforms"></i> Restaurant - PLACE YOUR ORDER</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-24">
		
		<div class="w3-container">
  <div class="w3-cell-row">
  <div class="w3-container w3-half w3-cell w3-mobile">
    <form>
  <!--<input type="checkbox" id="option1" name="option1" value="Menu">-->
  <label for="vehicle1"><strong>Menu Platform - THREE packages to select from!</strong></label><br>
	<strong>ALL packages include:</strong><br>
	A custom designed Menu QR Code, displaying your editable menus.<br>
	Custom designed tabletop sign (front and back printouts per table included - you can order the number of tabletop or wall sign acrylic holders below.)<br>
	A custom designed Birthday/Anniversary QR Code (placed onto your Menu sign.)<br>
	An editable Event/Entertainment Calendar.<br>
	A Contact Information QR Code sign for your FRONT COUNTER (your contact information and all menus are saved to the user's phone)<br>
	A 6" x 10" Window Cling with your Contact Information QR Code for your FRONT WINDOW/FRONT GLASS DOOR.<br><br>
		
	<input type="radio" id="pack1" name="package" value="STANDARD Package">  <label for="pack1"><strong class="packageTitle" for="pack1">STANDARD Package:</strong></label><br>
	$175.00 Set-Up and $30.00 per Month<br>
	ONE menu-includes the Specials meu, Calendar (which is an option as you Register) and the Birthday/Anniversary Promotion.<br><br>

	<input type="radio" id="pack2" name="package" value="STANDARD PLUS Package"> <label for="pack2"><strong class="packageTitle" for="pack2">STANDARD PLUS Package:</strong>
		</label><br>
	$225.00 Set-Up and $35.00 Month<br>
	TWO menus - includes the Specials menu, the Calendar (which is an option as you Register) and the Birthday/Anniversary Promotion.<br><br>

	<input type="radio" id="pack3" name="package" value="PREMIUM Package"> <label for="pack3"><strong class="packageTitle">PREMIUM Package:</strong></label><br>
	$275.00 Set-Up and $45.00 Month<br>
	UNLIMITED menus (breakfast, lunch, dinner, brunch, specials, etc.)<br>
	Includes the Calendar (which is an option as you Register) and the Birthday/Anniversary Promotion<br><br>

	<strong>Platform Management </strong>(we update everything, as needed): Quote provided based on your needs: Request Quote<br>
	<strong>Email Management </strong>(with specific numbers of email campaigns per month, and creative design options): Request Quote	<br><br>
			
	 </div>
  <div class="w3-container w3-half w3-cell w3-mobile">
	  
  <input type="checkbox" id="option1a" name="option1a" value="Calendar">
  <label for="option1a"> <strong>Birthday/Anniversary - FREE</strong></label><br>
	Your diners ( while awaiting their meal ) can tap the Birthday/Anniversary tab, read the details and then fill out the form (agreeing to the Privacy Policy and T&amp;Cs for using their data), click Submit, and FOUR things happen...<br>

		
		<p>Your diners ( while awaiting their meal ) can tap the Birthday/Anniversary tab, read the details and then fill out the form (agreeing to the Privacy Policy and T&amp;Cs for using their data), click Submit, and FOUR things happen...<br><br>
			<strong>1.</strong> They receive an automatic 'Thank You' email from You as shown below...<br> 
		<blockquote>Thank you for participating in our Birthday/Anniversary program. Two weeks prior to your birthday/anniversary date, we will email a reminder to you that we have a GIFT for you when you dine with us on your special day. </blockquote>
		
	This 'Thank You' email also includes your Menu platform link that includes your entertainment calendar, all contact information, menu, local shopping, etc., and a request to "add us to your CONTACTS LIST", placing your information on the user's phone for easy access.<br>

	<br><strong>2.</strong> They are redirected to your Menu Platform where they can access your Entertainment Calendar and About Us information, local shopping, and the Laguna Beach FUN Directory!<br>

	<br><strong>3.</strong> The data that is collected falls into your Restaurant Platform's back-office where you can download it to your computer, or to a third party email service for marketing (you can also hire us to assist you with your email marketing.)<br>

	<br><strong>4.</strong> Two weeks prior to their birthday/anniversary date they will receive the promised emailed message (Your birthday/anniversary is coming up! Dine with us on your special day to receive your surprise GIFT. Just show the waiter this email upon arrival to receive your gift.)<br><br>
		

    
 
	  
	    <input type="checkbox" id="option2a" name="option2a" value="Calendar">
  <label for="option2a"> <strong>Entertainment / Event Calendar - FREE</strong></label><br>
	Check the box to include it onto your platform.<br><br>
		<br>
		
  <input type="checkbox" id="option3" name="option3" value="Sign">
  <label for="option3"> <strong>Acrylic Two-Sided Tabletop or Wall Sign Holder</strong></label><br>
	Includes your printed, Menu + Birthday/Anniversary QR Code signage, placed on both sides of the tabletop holder, or a single printed Menu + Birthday/Anniversary QR Code sign for the wall mounted holder.<br>
	Please add the number of sign holders that you would like:<br><br>
		
	<input type="text" id="tblsign" name="tblsign" value="" size="4">
  	<label for="tblsign">5" x 7" Tabletop Sign Holder - $     per holder </label>
  <br><br>
    <input type="text" id="wallsign1" name="wallsign1" value="" size="4">	
    <label for="wallsign1">5" x 7" Wall Mount Sign Holder - $   per holder</label>
  <br><br>
    <input type="text" id="wallsign2" name="wallsign2" value="" size="4">
    <label for="wallsign2">8.5" x 11" Wall Mount Sign Holder - $    per holder</label>
  <br><br><br><br>
		
		
  <input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Self-adhering 6" x 10" Window Cling</strong></label><br>
	Includes your custom Contact Information QR Code and the Laguna Beach FUN Directory QR Code.
            One is included in your Menu Platform package, order here for additional pieces.<br><br>
		
		<input type="text" id="selfcling" name="selfcling" value="" size="4">
    <label for="selfcling">6" x 10" Window Clings - $     per piece</label>
  <br><br>
		
	  </form>
	  <br><br>
										
		<strong>SUBMIT ORDER</strong><br>
	  Please check your order, then submit for payment on the following screen. </p>
	  <form class="form-inline" action="payment.php">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#09a10d">Clear</button> 
  	</form><br>
	  
	  </div>
			
		</div>
		
  <strong>HELP</strong><br>
  Use the tabs below to get more information:<br><br>

<div class="w3-bar w3-highway-blue">
  <button class="w3-bar-item w3-button" onclick="openCity('London')">Menu</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Calendar</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">QR Code Signage</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Lyon')">Birthday/Anniversary</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Dublin')">Contact Information QR Code</button>
</div>

<div id="London" class="w3-container city">
  <p>The Coronavirus Pandemic has brought QR Codes into the spotlight as a way for consumers to avoid touching documents, such as a restaurant menu, thereby minimizing the transmission of the virus.</p>
</div>

<div id="Paris" class="w3-container city" style="display:none">
  <p>What better way to promote your live events .</p> 
</div>

<div id="Tokyo" class="w3-container city" style="display:none">
  <p>Our QR Codes are designed to be visually appealing which enhances the visibility of our signs.</p>
</div>
	  
<div id="Lyon" class="w3-container city" style="display:none">
  <p>A great way to build customer loyalty and future business by making sure you don't forget these important dates by connecting with them nearer the time.</p>
</div>	  

<div id="Dublin" class="w3-container city" style="display:none">
  <p>Always make sure your customers have your contact details close to hand through your online Business Page which contains all that information.</p>
</div>	  

	  
	 <script>
	function openCity(cityName) {
	  var i;
	  var x = document.getElementsByClassName("city");
	  for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	  }
	  document.getElementById(cityName).style.display = "block";  
	}
	</script>
	  
	  
	  

  
</div>
  
  

		</div>	
		</div>
  	</div>
	<?php echo file_get_contents("footer.html"); ?>	
	
	


  <!-- End page content 
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Hello") {
    x.innerHTML = "Swapped text!";
  } else {
    x.innerHTML = "Hello";
  }
}
</script>-->



<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body>
</html>
