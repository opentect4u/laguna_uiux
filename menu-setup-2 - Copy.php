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
	
	
</style>	
	
	
<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
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
    <h5><b><i class="fa fa-wpforms"></i> Restaurant - MENU Platform Data</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-24">
		

  <div class="w3-cell-row">
  <div class="w3-container w3-half w3-cell w3-mobile">
	  
	 <input type="checkbox" id="about" name="about" value="about">	
  <strong>ABOUT US</strong></label><br>
	  
	  <!-- This should include a word calculator, then below this some of the Registration content will also display:
Address, phone, email. The About Us "text" content will be also added to the vCard set-up.   -->
	  
	Please add a short bio of your restaurant: cuisine type, days/hours, safety, etc., <br>
	<br>	<form action="">
	<label for="spclMore">Write Bio here (max 150 words):</label><br>
	<textarea id="spclMore" name="spclMore" rows="5" cols="50">
	  </textarea>
	</form><br>
	  
	  <input type="checkbox" id="calendar" name="calendar" value="calendar">	
<label for="calendar"><strong>ENTERTAINMENT/EVENT CALENDAR</strong></label><br>
	  
	  <!-- This section is where the restaurant registers for access to the Calendar  -->
		You can select the month, then add/delete the date/time/description content as needed, 24/7. Content is automatically deleted after each published event/entertainment date.<br>
	  <br>You will be able to edit this Calendar after we set-up your initial menu. This is just a view-only example.<br><br>
	  <img src="images/events-cal-view.jpg" width="75%" height="auto">
  </div>
  <div class="w3-container w3-half w3-cell w3-mobile">
    	
	  
	  <input type="checkbox" id="notices" name="notices" value="notices">
	  <strong>NOTICES</strong>  <br><br>
	  This is where you provide details of any notices that need to be displayed on your menus. They could be regulatory notices required by law, food allergy comments, disclaimers or comments which relate to specific localized circumstances.<br>
	  <br>Using the drop down selectors choose a Menu and Position of the Notice. You then select the Header Title and the color of the Font followed by the Description. You must then SAVE this before entering another Notice.<br><br>
		
			<form class="form-inline" action="">
			<p>
			<label>Menu
			<select id="pickup_place" name="pickup_place">
			<option value="" selected="selected">Select One</option>
			<option value="all" >ALL Menus</option>
			<option value="breakfast" >Breakfast</option>
			<option value="lunch" >Lunch</option>
			<option value="dinner" >Dinner</option>
			<option value="brunch" >Brunch</option>
			<option value="specials" >Specials</option>
			</select>
			</label> 
			</p>
				
			<p>
			<label>Position
			<select id="" name="">
			<option value="" selected="selected">Select One</option>
			<option value="img1" >Top under Header Image</option>
			<option value="img2" >Bottom after last Section </option>
			<option value="img3" >After each Section</option>
			</select>
			</label> 
			</p>
				</form> 
			
			<form class="form-inline" action="">
			<form action="">
			<label for="headTitle">Header Title:</label><input type="text" id="headTitle" name="headTitle" value="">
			</form>	
			<form class="form-inline" action="">
			  <label for="favcolor">Select your font color:</label>
			  <input type="color" id="favcolor" name="favcolor" value="#ff0000">
			<label for="code">Enter Code:</label><input type="text" id="code" name="code" value="">			
			<br>
			</form>
			<form class="form-inline" action="">
			  <label for="favcolor">Select your background color:</label>
			  <input type="color" id="favcolor" name="favcolor" value="#ff0000">
			<label for="code">Enter Code:</label><input type="text" id="code" name="code" value="">			
			<br>
			</form><br>	
			<form class="form-inline" action="">
			<label for="vehicle2"> Notice Content</label><textarea id="spclMore" name="spclMore" rows="5" cols="60"></textarea>	
			</form>
			<br><br>
	  
	  
	  
	  
	  
	    <form action="thanks-order.php" target="_self">	
		<button class="w3-button w3-green" type="submit">SAVE and continue</button>
		</form> 


		 
	  
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
