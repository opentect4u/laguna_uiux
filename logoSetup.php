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
	
		
	  <div class="secDifer">
	<label class="titleCustom"><strong>LOGO</strong></label>
    
  <input type="checkbox" id="logo" name="logo" value="Logo">
  <label for="logo"><strong>Logo File</strong></label><br>
	<p>Upload your logo which needs to be in JPG or PNG format :</p>
	  <form action="">
  <label for="myfile">Select files:</label>
  <input type="file" id="myfile" name="myfile" multiple><br>

		
	<strong><u>OR</u></strong><br>
		
  <input type="checkbox" id="logo2" name="logo2" value="Logo Link">
  <label for="logo2"> <strong>Logo Url</strong></label>
		<p>Please provide a url/website address where we can collect your logo.</p>
	<form>
  <label for="url">Enter the url:</label>
  <input type="text" id="url" name="url" value="" size="28"><br>
</form> 
	<p style="font-style: italic">If we cannot collect the logo from your web site, we will contact you</p>	
		  
<!--
	  <form action="menu-setup-2.php" target="_self">	
		<button class="w3-button w3-green" type="submit">SAVE and continue</button>
		</form>
-->
		</div>
		
	  
	  <button class="w3-button w3-green" type="submit">Submit</button>
		
  
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
