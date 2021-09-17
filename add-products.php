<?php /* session_start();

if (!isset($_SESSION["user_name"]) && !isset($_SESSION['password'])) {
     header("location: signin.php");
     }
*/
?> 
<!DOCTYPE html>
<html>
<title>Restaurant - Add Products</title>
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
</style>
	
<style>
#more {display: none;}
</style>
	
	
	
<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Help</button>
  <span class="w3-bar-item w3-right">SLL Platform</span>
</div>

<?php echo file_get_contents("navigation-add-orderform.html"); ?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-wpforms"></i> Additional Products - Order</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-24">
		
		<div class="w3-container">
  <div class="w3-cell-row">
  <div class="w3-container w3-half w3-cell w3-mobile">
    <form>
  <input type="checkbox" id="option1" name="option1" value="Menu">
  <label for="vehicle1"><strong>Optional Email Marketing Program</strong></label><br>
	Please check box to receive more information and pricing options.<br><br>
		
  <input type="checkbox" id="option1a" name="option1a" value="Calendar">
  <label for="option1a"> <strong>Printed Menu Signage Refills</strong></label><br>
	<input type="text" id="tblsign" name="tblsign" value="" size="4">
  	<label for="tblsign">$     per piece </label>
  <br><br>
		
	<input type="checkbox" id="qrcpay" name="qrcpay" value="qrcpay">
		<label for="qrcpay"><strong>PAY HERE QR Code</strong></label><br>
		  Add your Bank's Payment PAY HERE QR Code to your platform, giving easy access for customers to pay their bill.<br>
		  This is set-up by you, on your own merchant platform. All we will need from you is your Payment QR Code and we will create your signage (see set-up details below)<br>
		  <br>Upload your QR Code<br>
		  <form action="">
		  <input type="file" id="myFile" name="filename">
		</form><br>
					
			<input type="checkbox" id="ebroch" name="ebroch" value="Ebrochure">
		  <label for="ebroch"> <strong>Ebrochure</strong></label><br>
				Add a link to your Ebrochure from your Contact Information QR Code.<br><br>
	  
	  		<input type="checkbox" id="eb1" name="eb1" value="Ebrochure">
		  <label for="eb1"> <strong>Standard Option $</strong></label><br><br>
	  		<input type="checkbox" id="eb2" name="eb2" value="Ebrochure">
		  <label for="eb2"> <strong>Premium Option $</strong></label><br><br>
		
		<input type="checkbox" id="option5" name="option5" value="Refill">
		  <label for="option5"> <strong>Printed Menu + Birthday/Anniversary QR Code Refills</strong></label><br><br>
					<input type="text" id="qrcrefill" name="qrcrefill" value="" size="4">
			<label for="qrcrefill">$     per piece</label>
		  <br><br>
		
  <input type="checkbox" id="option2a" name="option2a" value="Calendar">
  <label for="option2a"> <strong>Entertainment / Event Calendar - FREE</strong></label><br>
	Check the box to include it onto your platform.<br><br>
		
		
  <input type="checkbox" id="option3" name="option3" value="Sign">
  <label for="option3"> <strong>Acrylic Two-Sided Tabletop or Wall Sign Holder</strong></label><br>
		
	<input type="text" id="tblsign" name="tblsign" value="" size="4">
  	<label for="tblsign">5" x 7" Tabletop Sign Holder - $     per holder </label>
  <br><br>
    <input type="text" id="wallsign1" name="wallsign1" value="" size="4">	
    <label for="wallsign1">5" x 7" Wall Mount Sign Holder - $   per holder</label>
  <br><br>
    <input type="text" id="wallsign2" name="wallsign2" value="" size="4">
    <label for="wallsign2">8.5" x 11" Wall Mount Sign Holder - $    per holder</label>
  <br><br><br>
		
		
  <input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Self-adhering 6" x 10" Window Cling</strong></label><br>
	Includes your custom Contact Information QR Code and the Laguna Beach FUN MAP QR Code.
            One is included in your Menu Platform package, order here for additional pieces.<br><br>
		
		<input type="text" id="selfcling" name="selfcling" value="" size="4">
    <label for="selfcling">6" x 10" Window Clings - $     per piece</label>
  <br><br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Email Marketing Management</strong></label>
		(transferring data from your platform, to a third party email service + creative design.)<br>
		$<br><br>
		

		
	  </form>
    
  </div>
  <div class="w3-container w3-half w3-cell w3-mobile">
		
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Custom QR Code Design</strong></label>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
		$<br><br>
	  
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Laguna FUN DIRECTORY Advertising</strong></label>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
		$<br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> Shop Local Laguna will design your creative.  $</label><br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> You will supply the creative. $<br></label>
		<form action="">
		  <label for="qrc">Upload your logo which needs to be in JPG or PNG format :</label>
		  <input type="file" id="img-menu" name="img-menu"><br>
		</form><br>
		
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Laguna Beach ENTERTAINMENT/EVENTS Calendar Advertising</strong></label>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
		$<br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> Shop Local Laguna will design your creative.  $</label><br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> You will supply the creative. $</label><br>
		<br>
		<form action="">
		  <label for="qrc">Upload your logo which needs to be in JPG or PNG format :</label>
		  <input type="file" id="img-menu" name="img-menu"><br>
		</form><br>
		
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Shop Local Laguna Site Advertising</strong></label>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
		$<br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> Shop Local Laguna will design your creative.  $</label><br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> You will supply the creative. $</label>
		<br>
		<form action="">
		  <label for="qrc">Upload your logo which needs to be in JPG or PNG format :</label>
		  <input type="file" id="img-menu" name="img-menu"><br>
		</form><br>
		
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Custom Window Cling</strong></label>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
		$<br><br>
		
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>SPONSOR Opportunities</strong></label>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
		$<br><br>
		
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Add the Birthday/Anniversary Promotion</strong></label><br>
		<input type="checkbox" id="option4" name="option4" value="Cling">
  <label for="option4"> <strong>Add the Entertainment/Event Calendar</strong></label>
	  <br><br>
	  Please check your order, then submit for payment on the following screen. </p>
	  <form class="form-inline" action="payment-add-products.php">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#09a10d">Clear</button> 
  	</form><br>
	  
 <!-- <strong>HELP</strong><br>
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
	  
	  -->
	  

  </div>
</div>
  
  

		</div>	
		</div>
  	</div>
	<?php echo file_get_contents("footer.html"); ?>	
	
	


  <!-- End page content -->

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
