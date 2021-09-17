 
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
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #fa0909;
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
<body class="w3-light-grey">

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
    <h5><b><i class="fa fa-wpforms"></i> Account</b></h5>
  </header>
	<div class="w3-container w3-light-grey w3-padding-32">
	<div class="w3-container">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Data</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Usage</button>
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
  </tr>
  <tr bgcolor="#fff" align="center">
    <td bgcolor="#f1f1f1">
<script>
function msg() {
  alert("Click on File Record to view details");
}
</script>The Cliff Restaurant</td>
    <td>Joe </td>
    <td>Laguna Beach 92651 CA</td>
    <td>(949) 123 4567</td>
    <td>info@thecliffrestaurant.com</td>
  </tr>
</table> <br>
	</div>
	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15"> 
  <tr>
    <th scope="col">WEBSITE</th>
    <th scope="col">MAP (url)</th>
    <th scope="col">SLL (url)</th>
    <th scope="col">Ebrochure (url)</th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td bgcolor="#f1f1f1">https://www.thecliffrestaurant.com/</td>
    <td>https://www.mapurl.com</td>
    <td>https://www.sllurl.com</td>
    <td>https://www.ebrochureurl.com</td>
  </tr>
</table> <br>
	</div>
<!--	<div style="overflow-x:auto;">
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
    <td>eBrochure Scans </td>
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
    <td>Promotion Registrations</td>
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
	</div> -->
	</div><br><br></div>

<div id="Paris" class="tabcontent">
	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15">
  <tr>
    <th scope="col">Monthly Subscription</th>
    <th scope="col">No Users</th>
    <th scope="col">Free SMS</th>
    <th scope="col">Total Usage</th>
    <th scope="col">Excess Usage</th>
    <th scope="col">Excess Charge</th>
    <th scope="col">Month</th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td bgcolor="#f1f1f1">20.00</td>
    <td>2</td>
    <td>300</td>
    <td>350</td>
    <td>50</td>
    <td>4.00</td>
    <td>August 2021</td>
  </tr>
</table><br><br>
	</div>
	
	<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>CURRENT USAGE</th>
	  <th></th>
      <th></th>
      <th></th>
	  <th>Paul</th>
	  <th>Sandra</th>
      <th>Total Used</th>
    </tr>
    <tr>
      <td>Reminder</td>
	  <td></td>
      <td></td>
      <td></td>
	  <td>50</td>
      <td>80</td>
      <td>180</td>
    </tr>
    <tr>
      <td>Messages</td>
	  <td></td>
      <td></td>
      <td></td>
	  <td>60</td>
      <td>40</td>
      <td>220</td>
    </tr>
	<tr>
      <td>Total</td>
	  <td></td>
      <td></td>
      <td></td>
	  <td></td>
      <td></td>
      <td>400</td>
    </tr>
    <tr>
      <td>Credit</td>
	  <td></td>
      <td></td>
      <td></td>
	  <td></td>
      <td></td>
      <td>300</td>
    </tr>
	 <tr>
      <td>Excess</td>
	  <td></td>
      <td></td>
      <td></td>
	  <td></td>
      <td></td>
      <td>100</td>
    </tr>
	<tr>
      <td>Rate @</td>
      <td style="bor">0.08</td>
	  <td></td>
      <td></td>
	  <td></td>
      <td></td>
      <td style="font-weight: 600">£8.00</td>
    </tr>
	<tr>
      <td>Usage up to:</td>
      <td>15.08.2021</td>
	  <td></td>
      <td></td>
	  <td></td>
      <td></td>
      <td></td>
    </tr>
  </table><br><br>
  <em>If an Excess payment is shown this will be collected under the arrangements we have in place and will be shown on your next monthly statement </em><br><br><br>
</div>
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
		
<br><br><br>		

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
