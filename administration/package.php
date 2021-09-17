 
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
	
.customTextarea{height: 56px;}
	
button.editeCustom {
    padding:5px 12px;
    background-color: dodgerblue;
    border:none;
    color: white;
    cursor: pointer; border-radius: 4px; margin-right: 5px;
}
	
button.saveCustom {
    padding:5px 12px;
    background-color: #74a802;
    border: none;
    color: white;
    cursor: pointer; border-radius: 4px;
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
  <button class="tablinks" onclick="openCity(event, 'package')" id="defaultOpen">Package</button>
  <button class="tablinks" onclick="openCity(event, 'promoCalendar')" id="defaultOpen">Promo & Calendar</button>
  <button class="tablinks" onclick="openCity(event, 'signHolder')">Sign Holder</button>
  <button class="tablinks" onclick="openCity(event, 'windowCling')">Window Cling</button>

</div>

	<div id="package" class="tabcontent">
	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15">
	<tr>
	<th scope="col">Sl No</th>
	<th scope="col">Package Name</th>
	<th scope="col">Number Of Menu</th>
	<th scope="col">Special Menu</th>
	<th scope="col">Set Up Fee</th>
	<th scope="col">Monthly Fee</th>
	<th scope="col">Description </th>
	<th scope="col">Action </th>
	</tr>
		
	<tr align="center">
	<td>#1 </td>
	<td>Standard </td>
	<td>
	<select class="w3-input w3-padding-16 w3-border" name="country">
	<option value="Select Country">Select Country</option>
	<option value="onemenu">One Menu</option>
	<option value="twomenus">Two Menus</option>
	<option value="unlimitedmenus">Unlimited Menus</option>
	</select>	
	</td>
	<td>
		<input type="radio" id="yes" name="specialMenuStd" value="Yes"> <label for="yes">Yes</label> 
		<input type="radio" id="no" name="specialMenuStd" value="No"> <label for="No">No</label>
	</td>
	<td><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required="" name="setUpFee"></td>
	<td><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required="" name="monthlyFee"></td>
	<td><textarea class="w3-input w3-padding-16 w3-border customTextarea" ></textarea></td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	<tr align="center">
	<td>#2 </td>
	<td>Standard Plus</td>
	<td>
	<select class="w3-input w3-padding-16 w3-border" name="country">
	<option value="Select Country">Select Country</option>
	<option value="onemenu">One Menu</option>
	<option value="twomenus">Two Menus</option>
	<option value="unlimitedmenus">Unlimited Menus</option>
	</select>	
	</td>
	<td>
		<input type="radio" id="yes" name="specialMenuStdPlus" value="Yes"> <label for="yes">Yes</label> 
		<input type="radio" id="no" name="specialMenuStdPlus" value="No"> <label for="No">No</label>
	</td>
	<td><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required="" name="setUpFee"></td>
	<td><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required="" name="monthlyFee"></td>
	<td><textarea class="w3-input w3-padding-16 w3-border customTextarea" ></textarea></td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	<tr align="center">
	<td>#3 </td>
	<td>Premium  </td>
	<td>
	<select class="w3-input w3-padding-16 w3-border" name="country">
	<option value="Select Country">Select Country</option>
	<option value="onemenu">One Menu</option>
	<option value="twomenus">Two Menus</option>
	<option value="unlimitedmenus">Unlimited Menus</option>
	</select>	
	</td>
	<td>
		<input type="radio" id="yes" name="specialMenuPremium" value="Yes"> <label for="yes">Yes</label> 
		<input type="radio" id="no" name="specialMenuPremium" value="No"> <label for="No">No</label>
	</td>
	<td><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required="" name="setUpFee"></td>
	<td><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required="" name="monthlyFee"></td>
	<td><textarea class="w3-input w3-padding-16 w3-border customTextarea" ></textarea></td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	</table> <br>
	</div>
	</div>
		
	<div id="promoCalendar" class="tabcontent">
	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15">
	<tr>
	<th scope="col">Sl No</th>
	<th scope="col">Name</th>
	<th scope="col">Free</th>
	<th scope="col">Price</th>
	<th scope="col">Action</th>
	</tr>
		
	<tr align="center">
	<td>#1 </td>
	<td>Birthday/Anniversary </td>
	<td>
		<input type="radio" id="yes" name="specialMenuStd" value="Yes"> <label for="yes">Yes</label> 
		<input type="radio" id="no" name="specialMenuStd" value="No"> <label for="No">No</label>
	</td>
	<td>
		<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Price" required="" name="price">
	</td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>

	</tr>
		
	<tr align="center">
	<td>#2 </td>
	<td>Entertainment / Event Calendar </td>
	<td>
		<input type="radio" id="yes" name="specialMenuStd" value="Yes"> <label for="yes">Yes</label> 
		<input type="radio" id="no" name="specialMenuStd" value="No"> <label for="No">No</label>
	</td>
	<td>
		<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Price" required="" name="price">
	</td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	
		
	</table> <br>
	</div>
	</div>

	<div id="signHolder" class="tabcontent">
	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15">
	<tr>
	<th scope="col">Sl No</th>
	<th scope="col">Name</th>
	<th scope="col">Size</th>
	<th scope="col">Per Holder Price</th>
	<th scope="col">Action</th>
	</tr>
		
	<tr align="center">
	<td>#1 </td>
	<td>Tabletop Sign Holder</td>
	<td> 5" x 7"</td>
	<td>
		<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Price" required="" name="price">
	</td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	</tr>
		
	<tr align="center">
	<td>#2 </td>
	<td>Wall Mount Sign Holder </td>
	<td> 5" x 7"</td>
	<td>
		<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Price" required="" name="price">
	</td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	</tr>
		
	<tr align="center">
	<td>#3 </td>
	<td>Wall Mount Sign Holder</td>
	<td>8.5" x 11"</td>
	<td>
		<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Price" required="" name="price">
	</td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	
		
	</table> <br>
	</div>

	</div>

	<div id="windowCling" class="tabcontent">	

	<div style="overflow-x:auto;">
	<table width="100%" cellspacing="15">
	<tr>
	<th scope="col">Sl No</th>
	<th scope="col">Name</th>
	<th scope="col">Size</th>
	<th scope="col">Per Holder Price</th>
	<th scope="col">Action</th>
	</tr>
		
	<tr align="center">
	<td>#1 </td>
	<td>Window Clings </td>
	<td> 6" x 10" </td>
	<td>
		<input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Price" required="" name="price">
	</td>
	<td><button type="submit" class="btn btn-default editeCustom">Edit</button> <button type="submit" class="btn btn-default saveCustom">Save</button></td>
	</tr>
		
	
		
	
		
	</table> <br>
	</div>
	</div>
		

		</div>

  	</div>
	
	
	
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
