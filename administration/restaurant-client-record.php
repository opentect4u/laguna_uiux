 
<!DOCTYPE html>
<html>
<title>Restaurant - DASHBOARD</title>
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
body {font-family: "Raleway" sans-serif;}
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
	
<style>
body {font-family: "Raleway" sans-serif;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #b8c1f4;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #3F51B5;
  color: #fff;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>	
<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">SLL PLATFORM</span>
</div>

<?php echo file_get_contents("navigation-admin.html"); ?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-wpforms"></i> Restaurant Account</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-32">
	<div class="w3-container">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Restaurant</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Menu Setup 1</button>
  <button class="tablinks" onclick="openCity(event, 'Hydrobad')">Menu Setup 2</button>
  <button class="tablinks" onclick="openCity(event, 'Sydney')">Menu Setup 3</button>
  <button class="tablinks" onclick="openCity(event, 'Phoenix')">Menu Setup 4</button>
  <button class="tablinks" onclick="openCity(event, 'Christchurch')">Live Menus</button>
  <button class="tablinks" onclick="openCity(event, 'Laguna')">QR Codes</button>
</div>

<div id="London" class="tabcontent"><br><br>
 <div style="overflow-x:auto;">
        <table width="100%" cellspacing="15">
  <tr>
    <th scope="col">RESTAURANT NAME</th>
    <th scope="col">CONTACT NAME</th>
    <th scope="col">ADDRESS</th>
    <th scope="col">PHONE</th>
    <th scope="col">EMAIL</th>
    <th scope="col">WEBSITE</th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td bgcolor="#f1f1f1">
<script>
function msg() {
  alert("Click on File Record to view details");
}
</script>The Cliff Restaurant</td>
    <td>John Doe</td>
    <td>Laguna Beach 92651 CA</td>
    <td>(949) 123 4567</td>
    <td>info@thecliffrestaurant.com</td>
    <td>https://www.thecliffrestaurant.com/</td>
  </tr>
</table> <br>
	</div>
	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15"> 
  <tr>
    <th scope="col">LIVE DATE</th>
    <th scope="col">SETUP FEE</th>
    <th scope="col">MONTHLY FEE</th>
    <th scope="col">LAST PAID</th>
    <th scope="col">CANCEL DATE</th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td bgcolor="#f1f1f1">07/30/2021</td>
    <td>275.00</td>
    <td>45.00</td>
    <td>08/30/2021</td>
    <td>00/00/0000</td>
  </tr>
</table> <br>
	</div>
	<div style="overflow-x:auto;">
    <strong>REPORTS</strong><br><br>
        <table width="100%" cellspacing="10">
  <tr>
	<th scope="col">Report Title</th>
	<th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>Menu Scans</td>
    <td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="EXCEL" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays EXCEL Report");
}
      </script>
    </a></td>
	<td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="PDF" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays PDF Report");
}
      </script>
    </a></td>  
    <td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="PRINT" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays PRINT Report");
}
      </script>
    </a></td>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>Promotion - Registrations </td>
    <td bgcolor="#f1f1f1"><form>
  <input type="button" value="EXCEL" onclick="msg()">
</form>

<script>
function msg() {
  alert("Displays EXCEL Report");
}
	</script></td>
	<td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="PDF" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays PDF Report");
}
      </script>
    </a></td>
    <td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="PRINT" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays PRINT Report");
}
      </script>
    </a></td>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>Promotion - Emailed Offers</td>
    <td bgcolor="#f1f1f1"><form>
  <input type="button" value="EXCEL" onclick="msg()">
</form>

<script>
function msg() {
  alert("Displays EXCEL Report");
}
</script></td>
	<td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="PDF" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays PDF Report");
}
      </script>
    </a></td>
    <td bgcolor="#f1f1f1"><a href="">
      <form>
        <input type="button" value="PRINT" onclick="msg()">
      </form>

      <script>
function msg() {
  alert("Displays PRINT Report");
}
      </script>
    </a></td>
  </tr>
</table><br><br>
	</div>
	</div><br><br>

<div id="Paris" class="tabcontent">
	This is where you create the menus using the data taken from either the PDF provided by the restaurant or the link to their website.<br>
	<br>
	First of all identify which menus they offer including the start and end times of each menu<br><br>
	
	
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Breakfast</label>
	<form class="form-inine">
  Start Time: <input type="text" value="">
  End Time: <input type="text" name="lastname" value="">
	</form>	<br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Lunch</label><br>
	<form class="form-inine">
  Start Time: <input type="text" value="">
  End Time: <input type="text" name="lastname" value="">
	</form>	<br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Dinner</label><br>
	<form class="form-inine">
  Start Time: <input type="text" value="">
  End Time: <input type="text" name="lastname" value="">
	</form>	<br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Brunch</label><br>
	<form class="form-inine">
  Start Time: <input type="text" value="">
  End Time: <input type="text" name="lastname" value="">
	</form>	<br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Specials</label><br>
	<form class="form-inine">
  Start Time: <input type="text" value="">
  End Time: <input type="text" value="">
	</form>	<br>
	<br> <br>
	

	
	
	
	Now create the SECTIONS of each menu. Enter the title names one after the other seperated by a comma in the box provided<br><br>
	<form class="form-inline" action="">
	<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">
	<label for="vehicle2"> Breakfast</label><br> <br> <input type="text" value=""><br>
	<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">	
	<label for="vehicle2"> Lunch</label><br> <input type="text" value="">	
	<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">	
	<label for="vehicle2"> Dinner</label><br> <input type="text" value="">		
	</form> <br>
	<form class="form-inline" action="">
	<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">	
	<label for="vehicle2"> Brunch</label><br> <input type="text" value="">	
	<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">	
	<label for="vehicle2"> Specials</label><br> <input type="text" value="">	
	</form>  <br> <br>
	
	Please check that the details you've entered match the data on the Restaurant's Menu before you save.<br><br>
    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SAVE</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
	
</div>
	<div id="Hydrobad" class="tabcontent">	
		
		This is where you create the <strong>ITEMS</strong> in each <strong>SECTION</strong>. Using the drop down selectors choose a Menu and then a <strong>SECTION</strong>.<br><br> You will then enter the name of each <strong>ITEMS</strong> in that <strong>SECTION</strong> one by one BUT making sure you seperate each <strong>ITEMS</strong> with a comma.<br><br>
		You must then SAVE those <strong>ITEMS</strong> for that menu before entering the next Menu/<strong>SECTION ITEMS</strong>.<br><br>
		
			<form class="form-inline" action="">
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
			<select id="" name="">
			<option value="" selected="selected">Select One</option>
			<option value="img1" >Section 1</option>
			<option value="img2" >Section 2</option>
			<option value="img3" >Section 3</option>
			<option value="img1" >Section 4</option>
			<option value="img2" >Section 5</option>
			<option value="img3" >Section 6</option>
			<option value="img3" >Section 7</option>
			</select>
			</label> 
			</p>
				
			<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">
			<label for="vehicle2"> Item Names</label><br> <br> <textarea id="spclMore" name="spclMore" rows="1" cols="40"></textarea>	
			</form> 
		
			Please check that the details you've entered match the data on the Restaurant's Menu before you save.<br><br>
			<form class="form-inline" action="">
			<button type="submit" class="btn btn-default">SAVE</button>
			<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
			</form>
		
		
		
		</div>
		
		
		<div id="Sydney" class="tabcontent">
		
		This is where you create the Description, Price and Notes for each item on every menu.<br>
		<br>Using the drop down selectors choose a Menu, Section and then an Item. You will then enter the Description of each item together with the price in the next box and in the last box and additional Notes that are often provided on a menu.<br><br>
		You must then SAVE those items for that menu before entering the next Menu/Sector Items.<br><br>
		
			<form class="form-inline" action="">
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
			<select id="" name="">
			<option value="" selected="selected">Select One</option>
			<option value="img1" >Section 1</option>
			<option value="img2" >Section 2</option>
			<option value="img3" >Section 3</option>
			<option value="img1" >Section 4</option>
			<option value="img2" >Section 5</option>
			<option value="img3" >Section 6</option>
			<option value="img3" >Section 7</option>
			</select>
			</label> 
			</p>
				
			<p>
			<label>Item
			<select id="" name="">
			<option value="" selected="selected">Select One</option>
			<option value="img1" >Item 1</option>
			<option value="img2" >Item 2</option>
			<option value="img3" >Item 3</option>
			<option value="img1" >Item 4</option>
			<option value="img2" >Item 5</option>
			<option value="img3" >Item 6</option>
			<option value="img3" >Item 7</option>
			</select>
			</label> 
			</p>
				</form> 
			
			<form class="form-inline" action="">
			<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">
			<label for="vehicle2"> Description</label><br> <br> <textarea id="spclMore" name="spclMore" rows="1" cols="60"></textarea>	
			</form><br>
			<form class="form-inline" action="">
			<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">
			<label for="vehicle2"> Price</label><br> <br> <textarea id="spclMore" name="spclMore" rows="1" cols="6">$</textarea>
			</form><br>
			<form class="form-inline" action="">	
			<input type="checkbox" id="vehicle2" name="vehicle2" value="breakfast">
			<label for="vehicle2"> Additional Notes</label><textarea id="spclMore" name="spclMore" rows="1" cols="60"></textarea>	
			</form>
			<br><br>
		
			Please check that the details you've entered match the data on the Restaurant's Menu before you save.<br><br>
			<form class="form-inline" action="">
			<button type="submit" class="btn btn-default">SAVE</button>
			<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
			</form>
			

		
		</div>
		
		<div id="Phoenix" class="tabcontent">
		This is where you create any Special Notices that need to be shown on every menu. This could be for any reason with the most obvious being a regulatory statement required by law, such as warnings for people who suffer with Nut Allergies.<br> 
			<br>Using the drop down selectors choose a Menu and Position of the Notice. You then select the Header Title, the color of the Font and the background, followed by the Description. You must then SAVE this before entering another Notice.<br><br>
		
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
		
			Please check that the details you've entered match the data on the Restaurant's Menu before you save.<br><br>
			<form class="form-inline" action="">
			<button type="submit" class="btn btn-default">SAVE</button>
			<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
			</form>

		
		</div>
		
		<div id="Christchurch" class="tabcontent">
			<strong>MENU URL's</strong><br><br>
				<form class="form-inine">
			  Breakfast URL: <input type="text" value="" size="100">
				</form>	<br>
				<form class="form-inine">
			  Lunch URL: <input type="text" value="" size="100">
				</form>	<br>
				<form class="form-inine">
			  Dinner URL: <input type="text" size="100">
				</form>	<br>
				<form class="form-inine">
			  Brunch URL: <input type="text" size="100">
				</form>	<br>
				<form class="form-inine">
			  Specials URL: <input type="text" size="100">
				</form><br><br>
			<strong>REDIRECT URL (to be used for Menu QR Code)</strong><br><br>
				<form class="form-inine">
			  Bitly URL: <input type="text" size="120">
				</form><br>
			<strong>LANDING PAGE URL (to be used on vCard)</strong><br><br>
				<form class="form-inine">
			  Bitly URL: <input type="text" size="120">
				</form><br><br>
			
			
			
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
</table> <br><br><br><br>
			
			
			
			
			</div>
		
		</div>
<div id="Laguna" class="tabcontent">
	
	<div class="row">
	<div class="w3-third">
		<strong>QR Code for Dynamic Menu</strong><br><br>
		<a href="images/qr-code-thecliff.png" download><img src="images/qr-code-thecliff.png" width="60%" height="auto"></a><br><br>
		 This points to the redirect URL.<br><br>
		
		<label>To replace the QR Code upload your image file</label>
		<form action="">
		  <input type="file" id="myFile" name="filename"><br><br>
		  <input type="submit">
		</form><br>
		<em>Click image to download for printing purposes</em><br>
	</div>
	<div class="w3-third">
		
		<strong>QR Code for vCard</strong><br><br>
		<a href="images/qr-code-thecliff.png" download><img src="images/qr-code-thecliff.png" width="60%" height="auto"></a><br><br>
		 This points to the vCard URL.<br><br>
		
		<label>To replace the QR Code upload your image file</label>
		<form action="">
		  <input type="file" id="myFile" name="filename"><br><br>
		  <input type="submit">
		</form><br>
		<em>Click image to download for printing purposes</em><br>
		</form>
	
	
	
	</div>
	<div class="w3-third">
		<strong>QR Code for Laguna Beach Fun Directory</strong><br><br>
	
		<a href="images/qr-code-thecliff.png" download><img src="images/qr-code-thecliff.png" width="60%" height="auto"></a><br><br>
		 This points to the Laguna Fun Map URL.<br><br>
		
		<label>To replace the QR Code upload your image file</label>
		<form action="">
		  <input type="file" id="myFile" name="filename"><br><br>
		  <input type="submit">
		</form><br>
		<em>Click image to download for printing purposes</em><br>
		</form>
	
	
	
	</div>
	</div>
	
	
	
			</div>
		</div>

  	</div>
	
	<hr>
	<hr>
	<hr>
	<hr>
	
	<hr>
	
	<hr>
	
	<?php echo file_get_contents("footer.html"); ?>	

  <!-- Footer -->
		</div>		
		
		
		
		
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
</script>	
<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>		
	

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
