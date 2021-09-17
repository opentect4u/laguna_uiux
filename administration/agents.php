
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
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
<button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
<span class="w3-bar-item w3-right">Restaurant Project</span>
</div>
	
<?php echo file_get_contents("navigation-admin.html"); ?>
	
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<header class="w3-container" style="padding-top:22px">
<h5><b><i class="fa fa-users"></i> Sales Agents</b></h5>
</header>

<div class="w3-panel">
<div class="w3-row-padding" style="margin:0 16px">
<div class="w3-third">

	You can find a Sales Agent by searching their name or mobile number below or scrolling through the list to find the entry.<br>
	<br> Clicking VIEW will bring up that Agent's record opposite. <br><br><br>
	
	
	<form  action="">
			  <label for="agent">Agent:</label>
			  <input type="text" id="agent" placeholder="Agent" name="agent"><br><br>
			  <label for="mobile">Mobile:</label>
			  <input type="text" id="mobile" placeholder="Mobile" name="mobile"><br><br>
			  <button type="submit">SEARCH</button>
			  <br><br>
	<img src="images/database-list-agents.jpg" width="100%" height="250px">
		<br><br>
	
		<button class="w3-green">ACCOUNTS</button>
	
</div>
<div class="w3-two-thirds">
	
	<strong>AGENT DETAILS </strong><br>
	
	 <div style="overflow-x:auto;">
        <table width="100%" cellspacing="15">
  <tr>
    <th scope="col">NAME</th>
    <th scope="col">ADDRESS</th>
    <th scope="col">PHONE</th>
    <th scope="col">EMAIL</th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>Maria Myatt</td>
    <td>Laguna Beach 92651 CA</td>
    <td>(949) 123 4567</td>
    <td>mariaM@myemail.com</td>
  </tr>
</table>
<div align="right"><button class="w3-indigo">View Agent File</button></div><br><br>
	</div>
	
	<strong>ACCOUNTS - COMPENSATION</strong> (showing last ten sales/pending)<br>
	<div style="overflow-x:auto;">
        <table width="100%" cellspacing="15">
  <tr>
    <th scope="col">Date</th>
    <th scope="col">Restaurant</th>
    <th scope="col">Contact</th>
    <th scope="col">Package</th>
    <th scope="col">Status</th>
    <th scope="col">A/C Paid</th>
    <th scope="col">Comm Paid</th>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>09/10/2021</td>
    <td>The Cliff Restaurant</td>
    <td>John Doe</td>
    <td>Standard</td>
    <td>Paid</td>
    <td>$275</td>
    <td>$50</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/09/2021</td>
    <td>Nirvana Restaurant</td>
    <td>Jane Doe</td>
    <td>Standard</td>
    <td>Paid</td>
    <td>$275</td>
    <td>$50</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/09/2021</td>
    <td>Restaurant 3</td>
    <td>John Doe</td>
    <td>Standard</td>
    <td>Pending</td>
    <td>$0</td>
    <td>$0</td>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>09/08/2021</td>
    <td>Restaurant 4</td>
    <td>John Doe</td>
    <td>Standard</td>
    <td>Pending</td>
    <td>$0</td>
    <td>$0</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/06/2021</td>
    <td>Restaurant 5</td>
    <td>Jane Doe</td>
    <td>Premium</td>
    <td>Paid</td>
    <td>$400</td>
    <td>$75</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/10/2021</td>
    <td>Restaurant 6</td>
    <td>John Doe</td>
    <td>Standard</td>
    <td>Paid</td>
    <td>$275</td>
    <td>$50</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/09/2021</td>
    <td>Restaurant 7</td>
    <td>Jane Doe</td>
    <td>Standard</td>
    <td>Paid</td>
    <td>$275</td>
    <td>$50</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/09/2021</td>
    <td>Restaurant 8</td>
    <td>John Doe</td>
    <td>Standard</td>
    <td>Pending</td>
    <td>$0</td>
    <td>$0</td>
  </tr>
  <tr bgcolor="#fff" align="center">
    <td>09/08/2021</td>
    <td>Restaurant 9</td>
    <td>John Doe</td>
    <td>Standard</td>
    <td>Pending</td>
    <td>$0</td>
    <td>$0</td>
  </tr>
  	<tr bgcolor="#fff" align="center">
    <td>09/06/2021</td>
    <td>Restaurant 10</td>
    <td>Jane Doe</td>
    <td>Premium</td>
    <td>Paid</td>
    <td>$400</td>
    <td>$75</td>
  </tr>		
</table> <br>
	</div>
	
	
	
</div>
</div>
</div>

<br>

<?php echo file_get_contents("footer.html"); ?>	
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
