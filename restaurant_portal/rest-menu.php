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
    <h5><b><i class="fa fa-home fa-fw"></i> Restaurant Menu</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-32">
		<div class="w3-container">
		<strong>You can check any amendments by using the menu button below to view that menu. Always refresh the page before checking and clearing your cache memory if you need to.</strong>	
		<div style="overflow-x:auto;">
        <table width="100%" cellspacing="15">
  <tr>
    <th scope="col">BREAKFAST</th>
    <th scope="col">LUNCH</th>
    <th scope="col">DINNER</th>
    <th scope="col">BRUNCH</th>
    <th scope="col">SPECIALS</th>
  </tr>
  <tr bgcolor="#fff" align="center">
  <td><a href="https://shoplocallaguna.com/restaurants/the-cliff/breakfast.php" 
  target="popup" 
  onclick="window.open('https://shoplocallaguna.com/restaurants/the-cliff/breakfast.php','popup','width=400,height=500'); return false;">
    VIEW</a></td>
    <td><a href="https://shoplocallaguna.com/restaurants/the-cliff/lunch.php" 
  target="popup" 
  onclick="window.open('https://shoplocallaguna.com/restaurants/the-cliff/lunch.php','popup','width=400,height=500'); return false;">
    VIEW</a></td>
    <td><a href="https://shoplocallaguna.com/restaurants/the-cliff/dinner.php" 
  target="popup" class="w3-container" 
  onclick="window.open('https://shoplocallaguna.com/restaurants/the-cliff/dinner.php','popup','width=400,height=500'); return false;">
    VIEW</a></td>
    <td><a href="" 
  target="popup" 
  onclick="">
    VIEW</a></td>
    <td><a href="" 
  target="popup" 
  onclick="">
    VIEW</a></td>
  </tr><br>	
</table> <br>	
			

	<div class="w3-bar">	
		
	<p>Select appropriate TAB to amend your SLL Menu Application.</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Description')" id="defaultOpen">Description / Price</button>
  <button class="tablinks" onclick="openCity(event, 'Photos')">Photographs</button>
  <button class="tablinks" onclick="openCity(event, 'Time')">Day / Times</button>
  <button class="tablinks" onclick="openCity(event, 'Logo')">Logo</button>
  <button class="tablinks" onclick="openCity(event, 'About')">About Us</button>
</div>

<div id="Description" class="tabcontent">
  <form action="">
	  <div class="form-inline">
		<form class="myForm" method="get" enctype="" action="">

<p>
<label>Menu
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="breakfast" >Breakfast</option>
<option value="lunch" >Lunch</option>
<option value="dinner" >Dinner</option>
<option value="brunch" >Brunch</option>
<option value="specials" >Specials</option>
</select>
</label> 
</p>
	
<p>
<label>Section
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="housespc" >House Specialities</option>
<option value="acai" >AÇAÍ</option>
<option value="sides" >Sides</option>
<option value="tradbrk" >Traditional Breakfast</option>
<option value="omelets" >Omelets</option>
<option value="eggsB" >Eggs Benedict</option>
<option value="frenchT" >French Toast / Waffles</option>
<option value="beverages" >Beverages</option>
<option value="kids" >Kids</option>
<option value="desert" >Desert</option>
</select>
</label> 
</p>
			
<p>
<label>Item
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="burrito" >BREAKFAST BURRITO</option>
<option value="bagel" >LOX BAGEL</option>
<option value="steel" >STEEL CUT OATS BREAKFAST</option>
<option value="chkwaff" >CHICKEN &amp; WAFFLES</option>
<option value="eggssardou" >EGGSSARDOU</option>
<option value="chilaquiles" >CHILAQUILES</option>
<option value="brksandw" >THE CLIFF BREAKFAST SANDWICH</option>
<option value="rancheros" >HUEVOS RANCHEROS</option>
</select>
</label> 
</p> 			
			</div>	
		  
		  <div class="form-inline">
			  
		<label>Description
		<textarea name="description" maxlength="500" readonly>Scrambled eggs, ham &amp; cheese on a croissant or english muffin Served with breakfast potatoes or fresh fruit</textarea>
		</label>
			  
		<label>Description - update
		<textarea name="description" maxlength="500"></textarea>
		</label>
		  
		<label>Price $
		<input type="text" name="section_name" required>
		</label> 

</form> 
   
	
	Please check that the information above is correct before you press SUBMIT as the change will take effect immediately
   
		  <br>
		<br>  <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
		  
		</div>	
	  
	  </div>
	  
	  
			
<div id="Photos" class="tabcontent">
  <form action="">
	  <div class="form-inline">
		<form class="myForm" method="get" enctype="" action="">

<p>
<label>Menu
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="breakfast" >Breakfast</option>
<option value="lunch" >Lunch</option>
<option value="dinner" >Dinner</option>
<option value="brunch" >Brunch</option>
<option value="specials" >Specials</option>
</select>
</label> 
</p>
			
	<form action="">
  <label for="qrc">Upload image file :</label>
  <input type="file" id="img-menu" name="img-menu"><br>
</form><br> 		
			</div>

<div class="form-inline">			
<p>
<label>Section
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="housespc" >House Specialities</option>
<option value="acai" >AÇAÍ</option>
<option value="sides" >Sides</option>
<option value="tradbrk" >Traditional Breakfast</option>
<option value="omelets" >Omelets</option>
<option value="eggsB" >Eggs Benedict</option>
<option value="frenchT" >French Toast / Waffles</option>
<option value="beverages" >Beverages</option>
<option value="kids" >Kids</option>
<option value="desert" >Desert</option>
</select>
</label> 
</p>
			
			
		<form action="">
  <label for="qrc">Upload image file :</label>
  <input type="file" id="img-menu" name="img-menu"><br>
</form><br> <br>
	</div>
		  	
	Please check that the images you're about to upload are correct before you press SUBMIT as the changes will take effect immediately.<br><br>
		  
    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
	 </div>

	
	
	
<div id="Time" class="tabcontent">
    <form action="">
	  <div class="form-inline">
		<form class="myForm" method="get" enctype="" action="">

<p>
<label>Menu
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="breakfast" >Breakfast</option>
<option value="lunch" >Lunch</option>
<option value="dinner" >Dinner</option>
<option value="brunch" >Brunch</option>
<option value="specials" >Specials</option>
</select>
</label> 
</p>
	
<p>
<label>Day
<select id="" name="">
<option value="" selected="selected">Select One</option>
<option value="img1" >Monday</option>
<option value="img2" >Tuesday</option>
<option value="img3" >Wednesday</option>
<option value="img1" >Thursday</option>
<option value="img2" >Friday</option>
<option value="img3" >Saturday</option>
<option value="img3" >Sunday</option>
</select>
</label> 
</p>
			
<!-- <p>
<label>Item
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<option value="burrito" >BREAKFAST BURRITO</option>
<option value="bagel" >LOX BAGEL</option>
<option value="steel" >STEEL CUT OATS BREAKFAST</option>
<option value="chkwaff" >CHICKEN &amp; WAFFLES</option>
<option value="eggssardou" >EGGSSARDOU</option>
<option value="chilaquiles" >CHILAQUILES</option>
<option value="brksandw" >THE CLIFF BREAKFAST SANDWICH</option>
<option value="rancheros" >HUEVOS RANCHEROS</option>
</select>
</label> 
</p> -->			
			</div>	
		  
		  <div class="form-inline">
			
	
		<label>Start Time:
		<input type="text" name="start" required>
		</label> 
			  

		<label>End Time:
		<input type="text" name="end" required>
		</label> 
	  
			  

</div>
		  
		  

</form> 
	
	Please check that the details are correct before you SUBMIT as the change will take effect immediately.<br><br>
    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
</div>	
	
	<div id="Logo" class="tabcontent">
		

	<p>Upload your replacement logo which needs to be in JPG or PNG format :</p>
	 <br> <form action="">
  <label for="myfile">Select files:</label>
  <input type="file" id="myfile" name="myfile" multiple><br>
</form>
		
		
		Please check that the logo image is correct before you SUBMIT as the change will take effect immediately.<br><br>
   <br> <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
		
	</div>
	
	
	<div id="About" class="tabcontent">
	
		<br>
		<strong>Amend the bio of your restaurant:</strong><br>
		
		<form action="">
	<label for="spclMore">Current Bio</label><br>
	<textarea id="spclMore" name="spclMore" rows="6" cols="20" readonly>
The Cliff Restaurant offers a world class menu with an unsurpassed dining experience. Enjoy the 180 degree whitewater views from the multi-level patio while enjoying a relaxing breakfast or lunch, or catch a romantic sunset over dinner with a special friend.

We serve breakfast, lunch and dinner seven days a week, excluding Thanksgiving and Christmas.

Monday - Friday 8:30AM - 10:00PM
Saturday - Sunday 8:00AM - 10:00PM
Happy hour is from 3 p.m. to 6 p.m. Monday through Friday.

577 South Coast Hwy
Laguna Beach, CA 92651
Phone: (949) 494-1956
Email: info@thecliffrestaurant.com</textarea>
	</form><br>
		
		<form action="">
	<label for="spclMore"></label>Bio Amendment<br>
	<textarea id="spclMore" name="spclMore" rows="3" cols="20">
	  </textarea>
	</form><br>
		
		Please check that the amended text is no longer than <strong>150 words</strong> before you SUBMIT as the change will take effect immediately.<br><br>
    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
		
		
	
	</div>
	
	
	</div>	
	</div>	
		
		
		

	  

			<?php echo file_get_contents("footer.html"); ?>	
</div>
	
  <br>
  <!-- Footer -->
		

  <!-- End page content -->
	
<script>
function myFunction() {
  window.open("popup");
}
</script>
	
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


</body>
</html>
