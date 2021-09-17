<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
    height: 100%;
}
body {font-family: Arial, Helvetica, sans-serif;}
body{
  background-image: url("img/bg.jpg");
display: flex;
min-height: 100%;
flex-direction: column;
}
	
.mainContainer{display: grid; flex: 1 0 auto; align-items: center;}
form {border: 3px solid #000000;
	}

input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.9;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  /*width: 40%;*/
width: 120px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
	
</style>
<style>
* {
  box-sizing: border-box;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  /*height: 700px;  Should be removed. Only for demonstration */
}

.left, .right {
  width: 10%;
}

.middle {
  /*width: 80%;*/ border-radius: 10px;
  background-color: black;
	opacity:0.9;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.loginSec{max-width: 450px; width: 100%; margin: 0 auto;}	
.forgotPass{
    color: #fff;
    margin: 10px 0 25px 0;
    display: inline-block;
    font-size: 14px; float: left; font-weight: bold;
}
.forgotPass a{color: #fff; text-decoration: none;}
.forgotPass a:hover{text-decoration: underline;}
	
.siginUp{
    color: #fff;
    margin: 10px 0 25px 0;
    display: inline-block;
    font-size: 14px; float: right; font-weight: bold;
}
.siginUp a{color: #fff; text-decoration: none;}
.siginUp a:hover{text-decoration: underline;}
	
</style>	
	
</head>
<body>

<div class="mainContainer">

<!--<div class="row">
  <div class="column left" style="background-color:">
  </div>-->
	<div class="loginSec">
  <div class="column middle" style="background-color:">
	 <form action="index.php" method="post">
  <div class="imgcontainer">
    <img src="../images/sll_logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b style="color: white">Email Id</b></label>
    <input type="email" placeholder="Enter Email Id" autocomplete="off" name="email" required>

    
	  
    

    <button type="submit">Submit</button>
  </div>

  <div class="container" style="background-color:">
  </div>
</form> 
  </div>
	</div>
  <!--<div class="column right" style="background-color:">
  </div>
</div>-->	
</div>	
	
	

</body>
</html>
