 
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

<link rel="stylesheet" type="text/css" href="../apps.css">
	
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
	<div class="w3-container adminResturentTab">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">Restaurant</button>
  <button class="tablinks" onclick="openCity(event, 'tab2')">Download & Upload Image</button>
  <button class="tablinks" onclick="openCity(event, 'tab3')">Download Section Image</button>
  <button class="tablinks" onclick="openCity(event, 'tab33')">Set Date & Time</button>
  <button class="tablinks" onclick="openCity(event, 'tab4')">Create Section</button>
  <button class="tablinks" onclick="openCity(event, 'tab5')">Add Items</button>
  
  
  <button class="tablinks" onclick="openCity(event, 'tab6')">Description Price</button>
  <button class="tablinks" onclick="openCity(event, 'tab7')">Special Notes</button>
  <button class="tablinks" onclick="openCity(event, 'tab8')">About Us</button>
  
  <button class="tablinks" onclick="openCity(event, 'tab9')">Live Menus</button>
</div>

    <div id="tab1" class="tabcontent"><br><br>
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
    </div>
    
    <div id="tab2" class="tabcontent">
    
    <label class="titleCustom"><i class="fa fa-arrow-right"></i> Logo</label>
    <div class="table-responsive table_responsiveCus">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Logo URL</th>
        <th scope="col">Preview Image </th>
        <th scope="col">Upload Logo</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss"></td>
        
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      
    </tbody>
  </table>
      
	</div>
   
<hr>
    <label class="titleCustom"><i class="fa fa-arrow-right"></i> Cover Image</label>
    <div class="table-responsive table_responsiveCus">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Restaurant - Time</th>
        <th scope="col">Download Link</th>
        <th scope="col">Preview Image </th>
        <th scope="col"> Upload Image </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><strong>Breakfast</strong></td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><strong>Lunch</strong> </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td> <strong>Dinner</strong> </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>  <strong>Brunch</strong>  </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>  <strong>Specials</strong>  </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
    </tbody>
  </table>
      
	</div>
<hr>

    <label class="titleCustom"><i class="fa fa-arrow-right"></i> Top Image</label>
    <div class="table-responsive table_responsiveCus">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Restaurant - Time</th>
        <th scope="col">Download Link</th>
        <th scope="col">Preview Image </th>
        <th scope="col"> Upload Image </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><strong>Breakfast</strong></td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><strong>Lunch</strong> </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td> <strong>Dinner</strong> </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>  <strong>Brunch</strong>  </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>  <strong>Specials</strong>  </td>
        <td>
        <input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss">
        
</td>
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
        <td><label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple></td>
        <td class="divFlex"><a href="#" class="edite"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> <a href="#" class="update">Update</a></td>
      </tr>
    </tbody>
  </table>
      
	</div>
    
    
    
    </div>
    
    <div id="tab3" class="tabcontent">	
  
    <div class="radioBtnSec"><label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="Breakfast Menu"> Breakfast Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="Lunch  Menu">  Lunch  Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="bkMenu4">  Dinner  Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="bkMenu48">  Brunch  Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="bkMenu43">  Specials  Menu</label></div>
    <div class="table-responsive table_responsiveCus">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Sl. No.</th>
        <th scope="col">URL</th>
        <th scope="col">Download Images </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss"></td>
        
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td><input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss"></td>
        
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td><input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss"></td>
        
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td><input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss"></td>
        
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td><input type="url" id="headTitle" name="headTitle" value="" placeholder="URL" class="formCss"></td>
        
        <td><a href="#"><i class="fa fa-picture-o prvImg" aria-hidden="true"></i></a>
         </td>
      </tr>
    </tbody>
  </table>
      
	</div>
    
    
    
    </div>
    <div id="tab33" class="tabcontent">
    <div class="dateTime">
    
    
	<div class="formTable">
		

			<form class="form-inline" action="">
				<div class="rowCustomFour">
			<div class="fieldSecHalf">
			<label>Section Name</label>
			<select id="pickup_place" name="pickup_place" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="all">ALL Menus</option>
			<option value="breakfast">Breakfast</option>
			<option value="lunch">Lunch</option>
			<option value="dinner">Dinner</option>
			<option value="brunch">Brunch</option>
			<option value="specials">Specials</option>
			</select>
			 
			</div>
				
			
					
			</div>
				</form> 
			
			
			
			</div>
	
		<div class="dateTimLeft">
	<div class="form-inline dateTimRow">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Every Day</label><br>
	</div>
		
	<div class="form-inline dateTimRow">
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Monday</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Tuesday</label><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Wednesday</label><br>
	</div>
<div class="form-inline dateTimRow">
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Thursday</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Friday</label><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Saturday</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Sunday</label><br>
	</div></div>
	<div class="dateTimRight">
		<div class="form-inline timRow">
	<label for="selfcling">Start Time:</label>
	<input type="text" id="selfcling" name="selfcling" value="" size="4"><br><br>
    <label for="selfcling">End Time:</label>
	<input type="text" id="selfcling" name="selfcling" value="" size="4">
	</div></div>
    <br clear="all">

    <form action="thanks-order.php" target="_self">	
		<button class="w3-button w3-green" type="submit">Submit </button>
		</form>

	
</div>
    </div>
    
    <div id="tab4" class="tabcontent">
    
    
    <div class="radioBtnSec"><label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="Breakfast Menu"> Breakfast Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="Lunch  Menu">  Lunch  Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="bkMenu4">  Dinner  Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="bkMenu48">  Brunch  Menu</label>
    <label class="radioButtonName"><input type="radio" id="bkmenu" name="bkmenu" value="bkMenu43">  Specials  Menu</label></div>
    <div class="formTable">
		

			<form class="form-inline" action="">
				<div class="rowCustomFour">
			<div class="fieldSecFull">
			<label>Section Name</label>
			<input type="url" id="headTitle" name="headTitle" value="" class="formCss">
			 
			</div></div>
            
            <div class="rowCustomFour">
				
			<div class="fieldSecFull">
			<!--<label>Upload Section Images</label>
			<label class="uploadTxt">Upload Section images JPG or PNG:</label>
        <input type="file" id="myfile" class="uploadField" name="myfile" multiple="">-->
        
  <label>Upload Section Image </label>
  <label class="uploadTxt">Upload Section images JPG or PNG:</label>
  <input id='files' type='file' multiple/>
  <output id='result' />

			 
			</div>
					
			</div>
				</form> 
			
			
			
			</div>
            
            <form action="thanks-order.php" target="_self">	
		<button class="w3-button w3-green" type="submit">Submit </button>
		</form>
    
    </div>
    
    
    <div id="tab5" class="tabcontent">
    <div class="dateTime">
	<div class="formTable">
		

			<form class="form-inline" action="">
				<div class="rowCustomFour">
			<div class="fieldSecHalf">
			<label>Menu Name</label>
			<select id="pickup_place" name="pickup_place" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="all">ALL Menus</option>
			<option value="breakfast">Breakfast</option>
			<option value="lunch">Lunch</option>
			<option value="dinner">Dinner</option>
			<option value="brunch">Brunch</option>
			<option value="specials">Specials</option>
			</select>
			 
			</div>
			</div>
            
            <div class="rowCustomFour">
			<div class="fieldSecHalf">
			<label>Section Name</label>
			<select id="pickup_place" name="pickup_place" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="all">ALL Menus</option>
			<option value="breakfast">Top </option>
			<option value="lunch">Cover</option>
			
			</select>
			 
			</div>
            
            <div class="fieldSecHalf">
			<label>Item Name</label>
			<select id="pickup_place" name="pickup_place" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="all">1</option>
			<option value="breakfast">2</option>
			<option value="lunch">3</option>
			<option value="dinner">4</option>
			<option value="brunch">5</option>
			<option value="specials">6</option>
			</select>
			 
			</div>
			</div>
				</form> 
			
			
			
			</div>
	
		
    
    <form action="thanks-order.php" target="_self">	
		<button class="w3-button w3-green" type="submit">Submit </button>
		</form>

	
</div>
    
    
    </div>
    
    <div id="tab6" class="tabcontent">
    
    <div class="formTable">
		

			<form class="form-inline" action="">
				<div class="rowCustomFour">
			<div class="fieldSecHalf">
			<label>Menu</label>
			<select id="pickup_place" name="pickup_place" class="formCss">
			<option value="" selected="selected">Select One</option>
			<option value="all">ALL Menus</option>
			<option value="breakfast">Breakfast</option>
			<option value="lunch">Lunch</option>
			<option value="dinner">Dinner</option>
			<option value="brunch">Brunch</option>
			<option value="specials">Specials</option>
			</select>
			 
			</div>
				
			<div class="fieldSecHalf">
			<label>Section</label>
			<input type="text" id="headTitle" name="headTitle" value="" class="formCss">
			 
			</div>
					
			</div>
            
            <div class="rowCustomFour">
			<div class="fieldSecHalf">
			<label>Items</label>
			<input type="text" id="headTitle" name="headTitle" value="" class="formCss">
			 
			</div>
				
			<div class="fieldSecHalf">
			<label>Price</label>
			<input type="text" id="headTitle" name="headTitle" value="" class="formCss">
			 
			</div>
					
			</div>
				</form> 
			
			<form class="form-inline" action="">
			<div class="rowCustomFour">
			<div class="fieldSecFull">
			<label for="vehicle2"> Description</label>
			<textarea id="spclMore" name="spclMore" rows="5" cols="60" class="formCssTextArea"></textarea>	
			</div>
			</div>
			</form>
            
            <form class="form-inline" action="">
			<div class="rowCustomFour">
			<div class="fieldSecFull">
			<label for="vehicle2"> Additional Notes</label>
			<textarea id="spclMore" name="spclMore" rows="5" cols="60" class="formCssTextArea"></textarea>	
			</div>
			</div>
			</form>
            <form action="thanks-order.php" target="_self">	
		<button class="w3-button w3-green" type="submit">Submit </button>
		</form>
			</div>
    
    </div>
    
    <div id="tab7" class="tabcontent">
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
    
    <div id="tab8" class="tabcontent">
    
    <form action="" class="form-inline">

		  
		<div class="aboutLeft">  
		<label class="titleCustom">About Us</label>
		<textarea name="introduction" maxlength="500" rows="6" cols="25" class="formCssTextArea" readonly>We would love to make your next Birthday/Anniversary extra special with a gift you will find hard to resist but like all gifts they cannot be revealed until nearer the day! So enter your details below and we'll be in touch a couple of weeks before.</textarea>
		
		</div>
        <div class="aboutLeft">
		<label class="titleCustom">About Us (update)</label>
		<textarea name="introduction" maxlength="500" rows="6" cols="25" class="formCssTextArea"></textarea>
		
		</div>
</form> 
   
	
	<p>Please check that your update is correct before you press SUBMIT as the change will take effect immediately</p>
   
		    <form class="form-inline" action="">
    <button type="submit" class="btn btn-default">SUBMIT</button>
  	<button type="reset" value="Reset" style="background-color:#F00">Clear</button> 
  	</form>
    </div>
    
    
    
    <div id="tab9" class="tabcontent">
    
    <div class="formTable">
    <div class="rowCustomFour">
			<div class="fieldSecFull">
			<label>Menu URL</label>
			<input type="url" id="headTitle" name="headTitle" value="" class="formCss" placeholder="URL" >
			</div>
	</div>
    </div>
    <hr>
    <div class="formTable">
    <div class="rowCustomFour">
			<div class="fieldSecFull">
			<label> QR Code for Dynamic Menu</label>
			<a href="images/qr-code-thecliff.png" download=""><img src="images/qr-code-thecliff.png" class="barcodeImg"></a>
			</div>
	</div>
    
    </div>
    <hr>
    
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
    <td><a href="../frontend/index.html" 
    target="popup" 
    onclick="window.open('../frontend/index.html','popup','width=400,height=500'); return false;">
    VIEW</a></td>
    <td><a href="../frontend/index.html" 
    target="popup" 
    onclick="window.open('../frontend/index.html','popup','width=400,height=500'); return false;">
    VIEW</a></td>
    <td><a href="../frontend/index.html" 
    target="popup" class="w3-container" 
    onclick="window.open('../frontend/index.html','popup','width=400,height=500'); return false;">
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
    
    </div>
    <button class="w3-button w3-green" type="submit">Send Mail </button>
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

window.onload = function() {
  //Check File API support
  if (window.File && window.FileList && window.FileReader) {
    var filesInput = document.getElementById("files");
    filesInput.addEventListener("change", function(event) {
      var files = event.target.files; //FileList object
      var output = document.getElementById("result");
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        //Only pics
        if (!file.type.match('image'))
          continue;
        var picReader = new FileReader();
        picReader.addEventListener("load", function(event) {
          var picFile = event.target;
          var div = document.createElement("div");
          div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
            "title='" + picFile.name + "'/>";
          output.insertBefore(div, null);
        });
        //Read the image
        picReader.readAsDataURL(file);
      }
    });
  } else {
    console.log("Your browser does not support File API");
  }
}


	
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
