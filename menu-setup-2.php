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
<!--	
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
	
	
</style>	-->
	

	
	
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
	
.aboutLeft{width: 50%; float: left; padding-right: 15px;}	
.aboutRight{width: 50%; float: left;}


.form-inline input.colorPickerCustom{padding: 0;max-width: 119px;width: 100%;height: 34px;margin: 0;}	
	img.calendarImg{max-width: 100%;}

</style>	
	
<link rel="stylesheet" type="text/css" href="apps.css">

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
  <div class="w3-container w3-full w3-cell w3-mobile">
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'aboutUs')" id="defaultOpen">About Us</button>
  <button class="tablinks" onclick="openCity(event, 'notices')">	Notices </button>
  
</div>

<div id="aboutUs" class="tabcontent">
  <div class="aboutLeft">
  <label class="titleCustom"><strong>ABOUT US</strong></label>
	  
	  <!-- This should include a word calculator, then below this some of the Registration content will also display:
Address, phone, email. The About Us "text" content will be also added to the vCard set-up.   -->
	  
	Please add a short bio of your restaurant: cuisine type, days/hours, safety, etc., <br>
	<br>	<form action="">
	  <div class="rowCustomFour">
			<div class="fieldSecFull">
	<label for="spclMore">Write Bio here (max 150 words):</label>
	<textarea id="spclMore" name="spclMore" class="aboutTextarea" rows="5" cols="50">
	  </textarea>
		</div>
		 </div>
	</form>

	  
	  <button class="w3-button w3-green" type="submit" onclick="openCity(event, 'notices')">Save</button>
	  </div>
	  <div class="aboutRight"><label class="titleCustom"><strong>ENTERTAINMENT/EVENT CALENDAR</strong></label>
	  
	  <!-- This section is where the restaurant registers for access to the Calendar  -->
		You can select the month, then add/delete the date/time/description content as needed, 24/7. Content is automatically deleted after each published event/entertainment date.<br>
	  <br>You will be able to edit this Calendar after we set-up your initial menu. This is just a view-only example.<br><br>
	  <img src="images/events-cal-view.jpg" width="" height="auto" class="calendarImg"><br clear="all">
	</div>
		<br clear="all">

	  
	  
</div>

<div id="notices" class="tabcontent">
  <label class="titleCustom"><strong>NOTICES</strong>  </label>
	  This is where you provide details of any notices that need to be displayed on your menus. They could be regulatory notices required by law, food allergy comments, disclaimers or comments which relate to specific localized circumstances.<br>
	  <br>Using the drop down selectors choose a Menu and Position of the Notice. You then select the Header Title and the color of the Font followed by the Description. You must then SAVE this before entering another Notice.<br><br>
	
	<div class="formTable">
		

			<form class="form-inline" action="">
				<div class="rowCustomFour">
			<div class="fieldSecHalf">
			<label>Menu</label>
			<select id="pickup_place" name="pickup_place" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="all" >ALL Menus</option>
			<option value="breakfast" >Breakfast</option>
			<option value="lunch" >Lunch</option>
			<option value="dinner" >Dinner</option>
			<option value="brunch" >Brunch</option>
			<option value="specials" >Specials</option>
			</select>
			 
			</div>
				
			<div class="fieldSecHalf">
			<label>Position</label>
			<select id="" name="" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="img1" >Top under Header Image</option>
			<option value="img2" >Bottom after last Section </option>
			<option value="img3" >After each Section</option>
			</select>
			 
			</div>
					
			</div>
				</form> 
			
			
			<form action="">
				<div class="rowCustomFour">
			<div class="fieldSecFull">
			<label for="headTitle">Header Title:</label>
			<input type="text" id="headTitle" name="headTitle" value="" class="formCss"></div>
			</div>
			</form>	
			<form class="form-inline" action="">
			<div class="rowCustomFour">
				<div class="fieldSecHalf">
			  <label for="favcolor">Select your font color:</label>
			  <input type="color" id="colorPicker" class="colorPickerCustom" name="favcolor" value="#ff0000">
				</div>
				
			<div class="fieldSecHalf">
			<label for="code">Enter Code:</label>
			<input type="text" id="box" name="code" value="" class="formCss">			
			</div>
			</div>
		
			</form>
			<form class="form-inline" action="">
			<div class="rowCustomFour">
			<div class="fieldSecHalf">
			  <label for="favcolor">Select your background color:</label>
			  <input type="color" id="colorPicker2" class="colorPickerCustom" value="#6a5acd">
			</div>
			<div class="fieldSecHalf">
			<label for="code">Enter Code:</label>
			<input type="text" id="box2" name="code" value="" class="formCss">	
			</div>	
			</div>
			</form>
			<form class="form-inline" action="">
			<div class="rowCustomFour">
			<div class="fieldSecFull">
			<label for="vehicle2"> Notice Content</label>
			<textarea id="spclMore" name="spclMore" rows="5" cols="60" class="formCssTextArea"></textarea>	
			</div>
			</div>
			</form>
			</div>
	
	<br>
	  
	  
	  
	  
	  
	    <form action="thanks-order.php" target="_self">	
		<button class="w3-button w3-green" type="submit">Save & Continue </button>
		</form> 
		
	  
</div>

<!--
	Color Picker: <input type="color" 
            id="colorPicker" value="#6a5acd">
  
         To display hex code of the color 
        Hex Code: <input type="text" id="box">  
-->
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
	
	
function myColor() {
var color = document.getElementById('colorPicker').value;
document.body.style.backgroundColor = color;
document.getElementById('box').value = color;
}
// myColor() function is called
document.getElementById('colorPicker')
.addEventListener('input', myColor);

function myColor2() {
var color = document.getElementById('colorPicker2').value;
document.body.style.backgroundColor = color;
document.getElementById('box2').value = color;
}
// myColor() function is called
document.getElementById('colorPicker2')
.addEventListener('input', myColor2);
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
