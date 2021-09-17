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
	
	
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Help</button>
  <span class="w3-bar-item w3-right">SLL Platform</span>
</div>

<?php echo file_get_contents("navigation-setup.html"); ?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-wpforms"></i> Restaurant - Marketing and Privacy</b></h5>
  </header>
	<div class="w3-container w3-light-grey w3-padding-24">
		
		<div class="w3-container">
  <div class="w3-cell-row">
  <div class="w3-container w3-half w3-cell w3-mobile">
	     <strong>Marketing your Restaurant</strong><br><br>
	  Your platform provides many benefits to help run your business more efficiently and safely in the post Pandemic environment, with the main one being that your customers will never need to physically handle a menu. <br><br>
	 Another is their ability to scan the vCard QR Code and SAVE your details to their Mobile Contacts Directory. This would be extremely valuable if you enable the Data Capture system becasue when sending SMS to those cusomers they will know instantly that it is from your restaurant!<br><br>
	 <strong>DATA CAPTURE</strong><br>
	  By enabling the Data Capture program your customers will be invited to enter their Birthday/Anniversary date into a short form together with their mobile number or email address. Our system will then automatically send them a message 7/10 days before that date with an "exclusive" offer when booking a table for their celebration.<br><br>
	  If you enable the mobile data capture then what this means for those customers who have also scanned the vCard is that they will know for sure that the SMS they receive is genuinely from your restaurant.

	 <br>
    

  </div>
  <div class="w3-container w3-half w3-cell w3-mobile">

		
		<p><strong>PRIVACY</strong><br><br>
			...we've received your order, including photos and data, to add your restaurant to the Shop Local Laguna Platform.<br>
	  <br>We will now commence the building of your Digital Menu using all the information you've provided.<br>
	  <br>If for any reason there are any problems then we will contact you by email.<br>
	  <br><strong>What's Next?</strong><br>
	  <br>You will receive an email confirming that your platform has been built. This email will include a link to your sign in page where your Username will be your registered email address. We provide a temporary password which expires 2 hours after first logging in so the first thing you must do is create your new password.<br>
  		<br>Before your Digital Menu can go live you must check and confirm that all the data is correct and meets with your overall approval. You should do this by scanning the QR Code we've created, in the same way that your customers will in order to read your menu. <br>
	  <br>At this stage any errors or omissions would be completed by our technical support team. Once you've provided us with your authority to turn the Menu "live" then any future amendments to the Menu will be handled by you or your authorized staff from within your platform.</p>
		 
	  
</div>
  
  

		</div>	
		</div>
  	</div>
	<?php echo file_get_contents("footer.html"); ?>	
	
	

	
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
	
  <br>
  <!-- Footer -->
		</div>

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
