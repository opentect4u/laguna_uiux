<?php /* session_start();

if (!isset($_SESSION["user_name"]) && !isset($_SESSION['password'])) {
     header("location: signin.php");
     }
*/
?> 
<!DOCTYPE html>
<html>
<title>Restaurant Platform</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
	
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: left;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(255,255,255,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  background-color: #000;
  font-size: 10px;
  padding: 8px 8px;
  position: absolute;
  bottom: 2px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
	
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
	
<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 30em;
padding: 1em;
}

.myForm * {
box-sizing: border-box;
}

.myForm label {
padding: 0;
font-weight: bold;
text-align: right;
display: block;
}

.myForm input,
.myForm select,
.myForm textarea {
margin-left: 2em;
float: right;
width: 20em;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 14em;
margin-top: 1.8em;
}

.myForm button:hover {
background: #ccc;
cursor: pointer;
}
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

/* Style the tab */
.tab {
  overflow: hidden;
  border: none;
  background-color: #B4B2B2;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: 1px solid #000;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #F90909;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #000;
	color:white;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #fff;
  border-top: none;
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
</style>	
	
	
<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">SLL PLATFORM</span>
</div>

<?php echo file_get_contents("navigation-account.html"); ?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-users fa-fw"></i> Promotions</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-32">
		<div class="w3-container">
	<span>	To view the Birthday/Anniversary form click here  <a href="https://shoplocallaguna.com/restaurants/the-cliff/dinner.php" 
  target="popup" 
  onclick="window.open('https://shoplocallaguna.com/restaurants/the-cliff/dinner.php','popup','width=400,height=600'); return false;">
    <strong> VIEW</a></strong>	then click 'Birthday/Anniversary' on the top menu</span>
			

	<div class="w3-bar">	
		
	<p>Select appropriate TAB to amend the form and change/add questions.</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Intro')" id="defaultOpen">Introduction Message</button>
  <button class="tablinks" onclick="openCity(event, 'Confirm')">Confirmation Email</button>
  <button class="tablinks" onclick="openCity(event, 'Image')">Image</button>
  <button class="tablinks" onclick="openCity(event, 'Offer')">Popup Offer</button>
  <button class="tablinks" onclick="openCity(event, 'Questions')">Questions</button>
  <button class="tablinks" onclick="openCity(event, 'Status')">Status</button>
  <button class="tablinks" onclick="openCity(event, 'Mailing')">Mailing Email</button>
  <button class="tablinks" onclick="openCity(event, 'Customers')">Customer Database</button>
</div>

<div id="Intro" class="tabcontent">
  <form action="">
	  
		  
		  <div class="form-inline">
		<label>Introduction (current)
		<textarea name="introduction" maxlength="500" rows="6" cols="25" readonly>We would love to make your next Birthday/Anniversary extra special with a gift you will find hard to resist but like all gifts they cannot be revealed until nearer the day! So enter your details below and we'll be in touch a couple of weeks before.</textarea>
		</label>
		  
		<label>Introduction (update)
		<textarea name="introduction" maxlength="500" rows="6" cols="25"></textarea>
		</label>

</form> 
   
	
	Please check that your update is correct before you press SUBMIT as the change will take effect immediately
   
		  <br>
		<br>  <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form><br><br>
		 <br>
		</div>
		</div>	
		
		<div id="Confirm" class="tabcontent">
  <form action="">
		  
		<br>	  
		This is the email that's sent to a customer who registers for the Birthday/Anniversary Offer. It also qualifies them for your Free Offer<br> 
		Your staff will ask to see this email in order to verify that they've registered.<br>
	  
	    <div class="form-inline">
			
		<label>Confirmation Email (current)
		<textarea name="introduction" maxlength="500" rows="6" cols="25" readonly>We would like to thank you for registering on our Birthday/Anniversary Offer program and will contact you again a couple of weeks before the date/s you have provided. Please show this email to our staff who will make sure you receive your FREE Beverage. Many thanks and enjoy your meal.</textarea>
		</label>
		  
		<label>Confirmation Email (update)
		<textarea name="introduction" maxlength="500" rows="6" cols="25"></textarea>
		</label>

</form> 
			</form>
	
	Please check that your update is correct before you press SUBMIT as the change will take effect immediately
   
		  <br>
		<br>  <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
		  
		</div>
		</div>
		
<div id="Image" class="tabcontent">
  <form action="">
	 <br> 
	  Use the VIEW button above to see the image placed at the top of the promotion.<br>
	  <br>This is where you can select the image you want to display on your promotion by choosing from our range of options on the gallery below.<br><br><br>
	  
			  <strong>STOCK IMAGES</strong> | <i>&copy; These are images our designers have created and can be used for your Menu Promotion. They are copyright protected for other use.</i><br><br>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="../images/gallery-1.jpg" style="width:100%">
		  <div class="text">Code: 101</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="../images/gallery-2.jpg" style="width:100%">
		  <div class="text">Code: 202</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="../images/gallery-3.jpg" style="width:100%">
		  <div class="text">Code: 303</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		
<!--
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)">1</span> 
		  <span class="dot" onclick="currentSlide(2)">2</span> 
		  <span class="dot" onclick="currentSlide(3)">3</span> 
		</div>   -->
			
			</div>
		
		<br><div class="form-inline">
	  	On finding an image that you want to use just enter the image code here:
		<section style="width:150px">
		<input type="text" id="imgcode" name="imgcode" value="" size="4">
	   </div>
			  <br>
		

		</form> 
	
    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
	 </div>

<div id="Offer" class="tabcontent">
	
	<br>
	You can change your promotion at anytime. Just amend the details of your offer below.
    <form action="">
	  
		  
		  <div class="form-inline">
		<label>Free Offer Title (current)
		<textarea name="introduction" maxlength="500" rows="1" cols="25" readonly>FREE BEVERAGE</textarea>
		</label>
		  
		<label>Free Offer Title (update)
		<textarea name="introduction" maxlength="500" rows="1" cols="25"></textarea>
		</label>

		</form> 
		</div>
		 
	  
		  
		  <div class="form-inline">
		<label>Free Offer Body Text (current)
		<textarea name="introduction" maxlength="500" rows="2" cols="20" readonly>Register now and get a free beverage with your meal. Show the code you receive by text to our waiter</textarea>
		</label>
		  
		<label>Free Offer Body Text (update)
		<textarea name="introduction" maxlength="500" rows="2" cols="20"></textarea>
		</label>

		</form>
		  </div>

	
	Please check that the details are correct before you SUBMIT as the change will take effect immediately.<br><br>
    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
			 
			 
</div>	
	
	<div id="Questions" class="tabcontent">
		
	<br>The default questions of First Name, Last Name, Email, Birthday Date, Anniversary Date and Moble cannot be changed!<br>
		<br>You can add up to three further questions, placed underneath the default questions. They will be optional for the User to complete unlike the default questions.<br>
		
		
    <form action="">
	  
		  
		  <div class="form-inline">
		<label>Additional Question 1 (current)
		<textarea name="introduction" maxlength="500" rows="1" cols="20" readonly>What hobbies/interests do you have? </textarea>
		</label>
		  
		<label>Update
		<textarea name="introduction" maxlength="500" rows="1" cols="20"></textarea>
		</label>

</form> 
		
		 <form action="">
	  
		  
		  <div class="form-inline">
		<label>Additional Question 2 (current)
		<textarea name="introduction" maxlength="500" rows="2" cols="20" readonly>What is your favorit sport?</textarea>
		</label>
		  
		<label>Update
		<textarea name="introduction" maxlength="500" rows="2" cols="20"></textarea>
		</label>

</form>
			 </div>
		<form action="">
	  
		  
		  <div class="form-inline">
		<label>Additional Question 3 (current)
		<textarea name="introduction" maxlength="500" rows="2" cols="20" readonly>Where is your favorit vacation destination?</textarea>
		</label>
		  
		<label>Update
		<textarea name="introduction" maxlength="500" rows="2" cols="20"></textarea>
		</label>

</form>
			</div>
		Please check that the questions are correct as the change will take effect immediately.<br><br>
   <br> <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
		
		
	</div>
	
		</div>
		
	<div id="Status" class="tabcontent">
	
		<br>By default the promotion is run EVERY time the Menu QR Code is scanned. But you may not want it to run every day or every menu. <br>
		<br>However, we have provided you with complete flexibility to switch the promotion on and off depending on your requirements.<br>
		<br>Just select "ENABLE" or "DISABLE" from the options shown below...<br>
		
		
		<form action="">
	  <div class="form-inline">
		<form class="myForm" method="get" enctype="" action="">

		<p>
		<label>Menu
		<select id="pickup_place" name="pickup_place">
		<option value="" selected="selected">Select One</option>
		<option value="allMenus" >ALL Menus</option>
		<option value="breakfast" >Breakfast</option>
		<option value="lunch" >Lunch</option>
		<option value="dinner" >Dinner</option>
		<option value="brunch" >Brunch</option>
		<option value="specials" >Specials</option>
		<option value="beverage" >Beverage</option>
		</select>
		</label> 
		</p>

		<p>
		<label>Section
		<select id="day" name="day">
		<option value="" selected="selected">Select One</option>
		<option value="everyDay" >ALL Days</option>
		<option value="monday" >Monday</option>
		<option value="tuesday" >Tuesday</option>
		<option value="wednesday" >Wednesday</option>
		<option value="thursday" >Thursday</option>
		<option value="friday" >Friday</option>
		<option value="saturday" >Saturday</option>
		<option value="sunday" >Sunday</option>
		</select>
		</label> 
		</p>

		<p>
		<label>Status
		<select id="status" name="status">
		<option value="" selected="selected">Select One</option>
		<option value="enable" >Enable</option>
		<option value="disable" >Disable</option>
		</select>
		</label> 
		</p> 			
		
		<p><form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form></p>

	
	
	</div>	
		<br>To view the current status of the promotion on any given day or menu use the selectors below...<br>	
	<form action="">
	  <div class="form-inline">
		<form class="myForm" method="get" enctype="" action="">

		<p>
		<label>Menu
		<select id="pickup_place" name="pickup_place">
		<option value="" selected="selected">Select One</option>
		<option value="allMenus" >ALL Menus</option>
		<option value="breakfast" >Breakfast</option>
		<option value="lunch" >Lunch</option>
		<option value="dinner" >Dinner</option>
		<option value="brunch" >Brunch</option>
		<option value="specials" >Specials</option>
		<option value="beverage" >Beverage</option>
		</select>
		</label> 
		</p>

		<p>
		<label>Section
		<select id="day" name="day">
		<option value="" selected="selected">Select One</option>
		<option value="everyDay" >ALL Days</option>
		<option value="monday" >Monday</option>
		<option value="tuesday" >Tuesday</option>
		<option value="wednesday" >Wednesday</option>
		<option value="thursday" >Thursday</option>
		<option value="friday" >Friday</option>
		<option value="saturday" >Saturday</option>
		<option value="sunday" >Sunday</option>
		</select>
		</label> 
		</p>

		<p>
		<form action="">
		<div class="form-inline">
		<label>Current Status
		<textarea name="introduction" maxlength="500" rows="1" cols="5" readonly>Enabled</textarea>
		</label>
		</form>
		</p>
		</div>
		</div>
		</div>	
			
			
		<div id="Mailing" class="tabcontent">
			
  <form action="">
		  
		<br>	  
		This is the email that's sent to a customer around two weeks before their Birthday/Anniversary. It also qualifies them for the Free Offer.<br> 
		Your staff will ask customers to see this email in order to verify that they've registered.<br>
	    You can change this message at anytime however be aware that the amended email will be the one that is sent to ALL registered customers.<br><br>
	    <div class="form-inline">
			
		<label>Mailing Email (current)
		<textarea name="introduction" maxlength="500" rows="4" cols="35" readonly>
Hello [name from promotion registration]!
			
We are SO HAPPY to hear, it is almost your [Birthday]!

We would like to invite you to JOIN US on your [Birthday], and receive a SPECIAL SURPRISE!

Simply make a reservation, then show the waiter/waitress this email when you are first seated.

See you soon!
[Restaurant's Contact Name]

[Name of Restaurant]
[Address]
[Phone]
[Email]
[URL to MENU LANDING PAGE] (ie. https://www.shoplocallaguna.com/restaurants/the-cliff/LandingPage.php)
			
SAVE THIS INFORMATION TO YOUR PHONE'S CONTACT LIST!

			</textarea>
		</label>
		  
		<label>Mailing Email (update)
		<textarea name="introduction" maxlength="500" rows="4" cols="35"></textarea>
		</label>

</form> 
   		This is the text that is shown at the top of the email and is called the Subject Line. Your customer will recognize immediately what the message is about. We would recommend leaving this set to the default text but you can change it by entering the new text in the box provided.<br>BUT keep in mind that this would be changed on ALL emails sent to customers.
	  <br>
	<form action="">
	    <div class="form-inline">
			
		<label>Subject Line (current)
		<textarea name="introduction" maxlength="50" rows="1" cols="35" readonly>A [Happy Birthday] PRESENT from [The Cliff Restaurant]

			</textarea>
		</label>
		  
		<label>Subject Line (update)
		<textarea name="introduction" maxlength="50" rows="1" cols="35"></textarea>
		</label>

</form> 
	Please check that your update is correct before you press SUBMIT as the change will take effect immediately
   
		  <br>
		<br>  <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form><br><br>
		 <br>
		</div>
			
			
			
			
			</div>	
			
		<div id="Customers" class="tabcontent">
			
			<h5><strong>Client Database</strong></h5>
			
			This is the list of every person who has registered for your promotion during the last 30 days. This data will be automatically exported to the email address we hold on our records after the 30 days have expired. This is to comply with CCPA regulations as the Data Processor and which is set out in our Terms and Privacy Agreement.<br>
			<br>You can manually export any of these records prior to the 30 days by highlighting the record and clicking EXPORT. This file will be sent as a CSV file which you can download to your own system.<br>
			<br>You can locate a record by entering any of the criteria shown below and pressing SEARCH<br>
			
			<form class="form-inline" action="">
			  <label for="Fname">First Name:</label>
			  <input type="Fname" id="Fname" placeholder="First Name" name="Fname">
			  <label for="Lname">Last Name:</label>
			  <input type="Lname" id="Lname" placeholder="Last name" name="Lname">
			  <label for="mobile">Mobile:</label>
			  <input type="mobile" id="mobile" placeholder="Mobile" name="mobile">
			  <label for="email">Email:</label>
			  <input type="Email" id="Email" placeholder="Email" name="email">
			  <button type="submit">SEARCH</button>
			</form>
		  
			<img src="images/database-list.jpg" width="100%" height="auto">

		</div><br><br><br>
<strong>Once submitted you can see your updated menu by using the VIEW button at the top of the page</strong>
			<?php echo file_get_contents("footer.html"); ?>	
</div>
	
  <br>
  <!-- Footer -->
		

  <!-- End page content -->
	

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();	
	</script>
		
		
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

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>
