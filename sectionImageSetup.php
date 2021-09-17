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
<style>
body {font-family: "Raleway", sans-serif}

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
  padding: 10px 16px;
  transition: 0.3s;
  font-size: 12px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #44ABE4;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #00477E;
	color:white;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  font-size: 12px;
}
	
.secDifer{background: #f2f1f1; padding: 15px; border-bottom: #00477e solid 5px; margin-bottom: 15px;}
	 
label.titleCustom{font-size: 15px; display: block; color: #00477e; margin-bottom: 3px;}
.dayTime{display: block; width: 100%; border-bottom: #dbdbdb solid 1px;}
	.dayTime:last-child{border-bottom: none;}	
.dayCheckBox{width: 20%; display: inline-block;}
.startEnd{width: 78%; display: inline-block;}	

.dayTime .startEnd input{padding: 7px;}
	
	.logoRightSec{background: #f5f5f5;
padding: 15px;
box-shadow: #e1e1e1 0px 0px 6px 3px;
border-radius: 12px;
border: #ddd solid 1px;
border-right: #00477e solid 12px;}
	
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
  <header class="w3-container" style="padding-top:22px"><br>
	  <p><strong>Thank You for your payment and participation!</strong><br>
You can now begin to set-up your platform. Please follow the simple steps below. If you have any problems, please do not hesitate to email us: <a href="mailto:Support@shoplocallaguna.com">Support@ShopLocalLaguna.com</a></p>
    <h5><b><i class="fa fa-wpforms"></i> Restaurant - MENU Platform SET-UP</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-24">
		
		
  <div class="w3-cell-row">
  <div class="w3-container w3-full w3-cell w3-mobile">
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Breakfast</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Lunch</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Dinner</button>
  <button class="tablinks" onclick="openCity(event, 'Laguna')">Brunch</button>
  <button class="tablinks" onclick="openCity(event, 'Shrewsbury')">Specials</button>
</div>

<div id="London" class="tabcontent">
  
  <label class="titleCustom" for="bkmenu"><input type="checkbox" id="bkmenu" name="bkmenu" value="bkMenu"> <strong>Breakfast Menu</strong></label>
  With the content that you provide to us below, we will design your menu platform. If you offer a different menu for Breakfast, Lunch, Dinner, Brunch, etc., you can provide us with that information, and we will create your dynamic menu platform, displaying the appropriate menu, at your desired times/days. If you offer the same menu every day, simply add the content to the appropriate option.<br><br>

After we set-up your platform the first time, you can then browse and change photos and edit your menu items and pricing, as needed. The Cover Image is non-editable.<br><br>
	
	  <div class="secDifer">
	<label class="titleCustom"><strong>SECTION IMAGES</strong></label>
	  Add one image for each Section on your Breakfast menu.<br>
		<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Photo File</strong></label><br>
	  <form action="">
  <label for="myfile">Upload Section images JPG or PNG:</label><br>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
	<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Your Web Site Address/URL:</strong></label><br>	  
</form>Or, we can collect the photos found on your web site and add them to the Sections on your Breakfast menu:
	<form>
  <label for="url">Enter the url:</label> <input type="text" id="url" name="url" value="" size="28">
</form> 
	<p style="font-style: italic">If we cannot collect the photos from your web site, we will contact you</p> 
		</div>
		
	  
	  <button class="w3-button w3-green" type="submit">Submit</button>
</div>

<div id="Paris" class="tabcontent">
  <label class="titleCustom" for="bkmenu"><input type="checkbox" id="bkmenu" name="bkmenu" value="bkMenu">
  <strong>Lunch Menu</strong></label>
  With the content that you provide to us below, we will design your menu platform. If you offer a different menu for Breakfast, Lunch, Dinner, Brunch, etc., you can provide us with that information, and we will create your dynamic menu platform, displaying the appropriate menu, at your desired times/days. If you offer the same menu every day, simply add the content to the appropriate option.<br><br>

After we set-up your platform the first time, you can then browse and change photos and edit your menu items and pricing, as needed. The Cover Image is non-editable.<br><br>
	
	
	  <div class="secDifer">
	<label class="titleCustom"><strong>SECTION IMAGES</strong></label>
	  Add one image for each Section on your Breakfast menu.<br>
		<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Photo File</strong></label><br>
	  <form action="">
  <label for="myfile">Upload Section images JPG or PNG:</label><br>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
	<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Your Web Site Address/URL:</strong></label><br>	  
</form>Or, we can collect the photos found on your web site and add them to the Sections on your Breakfast menu:
	<form>
  <label for="url">Enter the url:</label> <input type="text" id="url" name="url" value="" size="28">
</form> 
	<p style="font-style: italic">If we cannot collect the photos from your web site, we will contact you</p> 
		</div>
		
	  
	  <button class="w3-button w3-green" type="submit">Submit</button>
</div>

<div id="Tokyo" class="tabcontent">
  <label class="titleCustom" for="bkmenu"><input type="checkbox" id="bkmenu" name="bkmenu" value="bkMenu">
   <strong>Dinner Menu</strong></label>
  With the content that you provide to us below, we will design your menu platform. If you offer a different menu for Breakfast, Lunch, Dinner, Brunch, etc., you can provide us with that information, and we will create your dynamic menu platform, displaying the appropriate menu, at your desired times/days. If you offer the same menu every day, simply add the content to the appropriate option.<br><br>

After we set-up your platform the first time, you can then browse and change photos and edit your menu items and pricing, as needed. The Cover Image is non-editable.<br><br>
	
	<div class="secDifer">
	<label class="titleCustom"><strong>SECTION IMAGES</strong></label>
	  Add one image for each Section on your Breakfast menu.<br>
		<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Photo File</strong></label><br>
	  <form action="">
  <label for="myfile">Upload Section images JPG or PNG:</label><br>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
	<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Your Web Site Address/URL:</strong></label><br>	  
</form>Or, we can collect the photos found on your web site and add them to the Sections on your Breakfast menu:
	<form>
  <label for="url">Enter the url:</label> <input type="text" id="url" name="url" value="" size="28">
</form> 
	<p style="font-style: italic">If we cannot collect the photos from your web site, we will contact you</p> 
		</div>
		
	  
	  <button class="w3-button w3-green" type="submit">Submit</button>
</div>

<div id="Laguna" class="tabcontent">
 <label class="titleCustom" for="bkmenu"> <input type="checkbox" id="bkmenu" name="bkmenu" value="bkMenu">
   <strong>Brunch Menu</strong></label>
	With the content that you provide to us below, we will design your menu platform. If you offer a different menu for Breakfast, Lunch, Dinner, Brunch, etc., you can provide us with that information, and we will create your dynamic menu platform, displaying the appropriate menu, at your desired times/days. If you offer the same menu every day, simply add the content to the appropriate option. <br><br>

After we set-up your platform the first time, you can then browse and change photos and edit your menu items and pricing, as needed. The Cover Image is non-editable.<br><br>

<br><strong>NOTE:</strong> This Brunch selection will supersede any of the daily selections you may have selected. Example, if you selected Sunday for the Breakfast menu to display, and then you select the same day (Sunday) for the Brunch menu to display, the most recent Brunch selection will apply to Sunday.<br>
<br>
	<div class="secDifer">
	<label class="titleCustom"><strong>SECTION IMAGES</strong></label>
	  Add one image for each Section on your Breakfast menu.<br>
		<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Photo File</strong></label><br>
	  <form action="">
  <label for="myfile">Upload Section images JPG or PNG:</label><br>
  <input type="file" id="myfile" name="myfile" multiple><br><br>
	<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Your Web Site Address/URL:</strong></label><br>	  
</form>Or, we can collect the photos found on your web site and add them to the Sections on your Breakfast menu:
	<form>
  <label for="url">Enter the url:</label> <input type="text" id="url" name="url" value="" size="28">
</form> 
	<p style="font-style: italic">If we cannot collect the photos from your web site, we will contact you</p> 
		</div>
		
	  
	  <button class="w3-button w3-green" type="submit">Submit</button>
</div>

<div id="Shrewsbury" class="tabcontent">
  <label class="titleCustom" for="bkmenu"><input type="checkbox" id="bkmenu" name="bkmenu" value="bkMenu">
   <strong>Specials Menu</strong></label>
	After we set-up your platform the first time, you can then browse and change photos and edit your menu items and pricing, as needed. The Cover Image is non-editable.<br>
	<br>If you do not have a Specials menu that you would like to include onto your platform now, please skip this area. You can always add a Specials menu from your back office, 24/7.<br> <br>

	
	<div class="secDifer">
		<label class="titleCustom"><strong>MENU:</strong></label>
	  Upload a PDF file of your Specials menu.<br>
	
		<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>File</strong></label><br>
<form action="">
  <label for="myfile">Select file/s:</label>
  <input type="file" id="myfile" name="myfile" multiple><br>
</form><br>

<input type="checkbox" id="menuImg" name="menuImg" value="menuImg">
  <label for="menuImg"> <strong>Your Web Site Address/URL:</strong></label><br>  
</form>Or, please provide a web site address/url where we can collect your menu content:
	<form>
  <label for="url">Enter the url:</label> <input type="text" id="url" name="url" value="" size="28">
</form> 
	<p style="font-style: italic">If we cannot collect the content from your web site, we will contact you</p>	
	
	
	<p>Please select your SPECIALS menu image from our gallery.<br>
When you select your SPECIALS menu image, it will include a color coordinated pop-up (per the below, if you would like your SPECIALS menu to display WITH your normally scheduled menu, a "pop-up" will display.)</p>
	  </div>  
	  
	<div class="secDifer">
		<label class="titleCustom"><strong>DISPLAY DAY &amp; TIMES:</strong></label>
	When you select your <strong>SPECIALS</strong> menu's day/times, a new TAB will display at the top of your menu platform to alert your customers that a Specials menu is available.<br>

	<br><strong>NOTE:</strong> If you would like to schedule "more than one" <strong>SPECIALS</strong> menu at a time, please complete one (and submit), then start another. Always do one at a time.<br>
	<br>You have <strong>"TWO OPTIONS"</strong> for how your <strong>SPECIALS</strong> menu will be displayed:<br>

	<br><strong>EXCLUSIVELY:</strong> Your <strong>SPECIALS</strong> menu will display<strong> "by itself"</strong> on your selected day/time (replacing your normally scheduled menus.) <br>

	<br><strong>IN ADDITION:</strong> Your <strong>SPECIALS</strong> Menu will be displayed <strong>"with"</strong> your normally scheduled menu, on your selected day/time.<br>

	<br>Additionally, a <strong>SPECIALS</strong> TAB will appear on the navigation bar to alert your customers that a Specials menu is available. <br>

	<br><strong>NOTE:</strong> If you would like to schedule "more than one" <strong>SPECIALS</strong> menu at a time, please complete one (and submit), then start another. Always do one at a time.<br><br>

	<input type="checkbox" id="exc" name="exc" value="exc">
	  <label for="exc"> <strong>EXCLUSIVELY</strong></label><br>
	If you would like your <strong>SPECIALS</strong> menu to display <strong>EXCLUSIVELY</strong> (your "normally scheduled" menus <strong>will not</strong> display, and will be <strong>REPLACED</strong> with your <strong>SPECIALS</strong> menu),
	please select the display days/times:<br>


	
	<form action="">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> <strong>EVERY WEEK</strong></label><br> Select the day(s) to display your <strong>SPECIALS</strong> menu
	</form>
	<form class="form-inline" action="">
  <input type="checkbox" id="vehicle5" name="vehicle5" value="Plane">
  <label for="vehicle5"> Every Day</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Monday</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Tuesday</label><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Wednesday</label><br>
	</form>
	<form class="form-inline" action="">
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Thursday</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Friday</label><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Saturday</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Sunday</label><br>
	</form>

	Select your normally scheduled menu to replace:<br>
	 
	<form class="form-inline" action="">
  		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Breakfast</label><br>
 		 <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  		 <label for="vehicle3"> Lunch</label><br>
  		 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 		 <label for="vehicle1"> Dinner</label><br>
 		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Brunch</label><br>
	</form><br>
	<form action="">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> <strong>SPECIFIC DATE:</strong></label><br> Select the specific date that you would like your <strong>SPECIALS</strong> menu to display<br>
		
		<input type="date" id="special" name="special">
	</form> <br>
		TIME: Select the normally scheduled menu that your SPECIALS menu will display with:

	<form class="form-inline" action="">
  		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Breakfast</label><br>
 		 <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  		 <label for="vehicle3"> Lunch</label><br>
  		 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 		 <label for="vehicle1"> Dinner</label><br>
 		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Brunch</label><br>
	</form>
			</div>

<!--
<hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">
<hr style="height:2px; width:100%; border-width:0; color:red; background-color:red">
-->

<div class="secDifer">
		<label for="exc" class="titleCustom">
	<input type="checkbox" id="exc" name="exc" value="exc">
	  <strong>IN ADDITION</strong></label>
	If you would like your <strong>SPECIALS</strong> menu to display <strong>IN ADDITION</strong> to your "normally scheduled" menus (your <strong>SPECIALS </strong> menu will be displayed <strong>WITH</strong> your Specials menu), please select the display days/times:<br>
	<br>NOTE: When your customer views your normally scheduled menu, they will ALSO see a pop-up, indicating there is a SPECIALS menu to view. <br><br>

	</div>
	
	<div class="secDifer">
		
	<form action="">
  <label for="vehicle1" class="titleCustom"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <strong>EVERY WEEK</strong></label>Select the day(s) to display your <strong>SPECIALS</strong> menu
	</form>
	<form class="form-inline" action="">
  <input type="checkbox" id="vehicle5" name="vehicle5" value="Plane">
  <label for="vehicle5"> Every Day</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Monday</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Tuesday</label><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Wednesday</label><br>
	</form>
	<form class="form-inline" action="">
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Thursday</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Friday</label><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Saturday</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Sunday</label><br>
	</form>

	<strong>TIME:</strong> Select the normally scheduled menu that your <strong>SPECIALS</strong> menu will display with:<br>
	 
	<form class="form-inline" action="">
  		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Breakfast</label><br>
 		 <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  		 <label for="vehicle3"> Lunch</label><br>
  		 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 		 <label for="vehicle1"> Dinner</label><br>
 		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Brunch</label><br>
	</form><br>
	<form action="">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> <strong>SPECIFIC DATE:</strong></label><br> Select the specific date that you would like your <strong>SPECIALS</strong> menu to display<br>
		<br>Date for Specials Menu:
		<input type="date" id="special" name="special">
	</form><br>
		<strong>TIME:</strong> Select the normally scheduled menu that your SPECIALS menu will display with:<br>
	 
	<form class="form-inline" action="">
  		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Breakfast</label><br>
 		 <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  		 <label for="vehicle3"> Lunch</label><br>
  		 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 		 <label for="vehicle1"> Dinner</label><br>
 		 <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
 		 <label for="vehicle2"> Brunch</label><br>
	</form><br>
	</div>
<button class="w3-button w3-green" type="submit">Previous</button> <button class="w3-button w3-green" type="submit">Next & Continue</button>
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
	// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
	  <br><br><br>
	
    
  </div>



  
  

		</div>
  	</div>
	<?php echo file_get_contents("footer.html"); ?>	
	
	

	

	
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
