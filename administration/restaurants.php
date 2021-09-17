
<!DOCTYPE html>
<html>
<head/><title>Admin Restaurant Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>html,body,h1,h2,h3,h4,h5{font-family:"Raleway",sans-serif}</style>
<body class="w3-white">
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
<button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
<span class="w3-bar-item w3-right">Restaurant Project</span>
</div>
	
<?php echo file_get_contents("navigation-admin.html"); ?>
	
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<header class="w3-container" style="padding-top:22px">
<h5><b><i class="fa fa-users"></i> Restaurants</b></h5>
</header>

<div class="w3-panel">
<div class="w3-row-padding" style="margin:0 16px">

	<h5><strong>Database</strong></h5>
			
			You can locate a record by searching on any of the criteria shown below or scrolling through the list to find the entry. Clicking EDIT will bring up that restaurant's record.<br><br>
			
			<form class="form-inline" action="">
			  <label for="rest">Restaurant:</label>
			  <input type="text" id="rest" placeholder="Restaurant" name="rest">
			  <label for="address">Address:</label>
			  <input type="text" id="address" placeholder="Address" name="address">
			  <label for="mobile">Mobile:</label>
			  <input type="text" id="mobile" placeholder="Mobile" name="mobile">
			  <label for="email">Email:</label>
			  <input type="Email" id="Email" placeholder="Email" name="email">
			  <button type="submit">SEARCH</button>
			</form><br><br>
		  
			<a href="restaurant-client-record.php" target="_self"><img src="images/database-list.jpg" width="100%" height="auto"></a>

	
	
	
	
	
	</div>
<div class="w3-row-padding" style="margin:0 -16px">	
<div class="w3-twothird">

	
	
	
	
	
	
	
	
	
</div>
		
</div>
</div>
<hr>
<div class="w3-container">

	
	
	
</div>
<hr>
<div class="w3-container">

	
	
	
</div>
<hr>
<div class="w3-container">

	
	
	
	
</div>
<hr>
<div class="w3-container">

	
	
	
	
</div>
	
<br>
<hr>
	<hr>
	<hr>
	<hr>
	
<?php echo file_get_contents("footer.html"); ?>	
	</div>
	
</div>
<script>var mySidebar=document.getElementById("mySidebar");var overlayBg=document.getElementById("myOverlay");function w3_open(){if(mySidebar.style.display==='block'){mySidebar.style.display='none';overlayBg.style.display="none";}else{mySidebar.style.display='block';overlayBg.style.display="block";}}function w3_close(){mySidebar.style.display="none";overlayBg.style.display="none";}</script>
<script>var sc_project=11145952;var sc_invisible=1;var sc_security="40b893f9";</script>
<script src="//www.statcounter.com/counter/counter.js" async></script>
<noscript>
<div class="statcounter">
<img class="statcounter" src="//c.statcounter.com/11145952/0/40b893f9/1/" alt="Web Analytics" data-pagespeed-url-hash="1232143930">
</div>
</noscript>
</body>
</html>
