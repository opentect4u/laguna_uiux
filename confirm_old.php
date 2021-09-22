<?php /* session_start();

if (!isset($_SESSION["user_name"]) && !isset($_SESSION['password'])) {
     header("location: signin.php");
     }
*/
?> 
<!DOCTYPE html>
<html>
<title>Restaurant - Confirm</title>
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
	<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
	
<body class="w3-white">

<!-- Top container -->
<div class="w3-bar w3-top w3-highway-blue w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Help</button>
  <span class="w3-bar-item w3-right">SLL Platform</span>
</div>

<?php echo file_get_contents("navigation-confirm.html"); ?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-wpforms"></i> Restaurant - Menu Approval</b></h5>
  </header>
	<div class="w3-container w3-white w3-padding-24">
		
		<div class="w3-container">
  <div class="w3-cell-row">
  <div class="w3-container w3-half w3-cell w3-mobile">
	  
		  <br>You have viewed your Digital Menu by scanning the QR Code contained in our confirmation email!<br> 
		  <br>If all of the menu content is correct and meets with your overall approval, then please signify this by completing the Approval Form.<br> 
			<br>However if there are any errors or omissions then please identify those issues in the form and they will be corrected immediately by our technical support team.<br>
	  		<br>When those issues have been completed you'll receive the confirmation email again.<br>
			<br><strong>Once you've provided us with your final approval, your Menu will go LIVE.</strong><br>
	 		 </p>
    

  </div>
  <div class="w3-container w3-half w3-cell w3-mobile">

			<h3>Digitial Restaurant Menu </h3>



	<form action="" method="get" id="approval">  
	  <label for="rest">Restaurant Name:</label>
	  <input type="text" id="rest" name="rest"><br><br>
	  <label for="contact">Name of person:</label>
	  <input type="text" id="contact" name="contact"><br>
	</form><br>Please signify your approval or request an update of the Menu:<br><br>
	  <form>
		  <input type="radio" id="html" name="fav_language" value="HTML">
		  <label for="html">I have reviewed my MENU platform, and I APPROVE</label><br><br>
		  <input type="radio" id="css" name="fav_language" value="CSS">
		  <label for="javascript">I have checked my MENU Platform, and would like to request an update:</label><br><br>
		  
	  </form>
	  Which Menu/s require an update?<br><br>
	  <form class="form-inline" action="">
	  <label class="container">Breakfast
		  <input type="checkbox" checked="checked">
		  <span class="checkmark"></span>
		</label>
		<label class="container">Lunch
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>
		<label class="container">Dinner
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>
		<label class="container">Brunch
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>
	    <label class="container">Specials
		  <input type="checkbox">
		  <span class="checkmark"></span>
		</label>
	  </form><br><br>
	  
	  Please describe what requires updating for each Menu.<br> 
	  <textarea rows="6" cols="60" maxlength="50"></textarea><br><br>
	  

		<button type="submit" form="nameform" value="Submit">Submit</button>
	  

	  
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
