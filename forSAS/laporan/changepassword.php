<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<div id="container">
	  
	  <div id="header">
	    <center><h1>Change Password</h1></center>
	  </div> 
	  <div id="form">
	    <input type="password" placeholder="New Password" id="passOne"/>
	    <input type="password" placeholder="Confirm Password" id="passTwo"/>
	  </div>
	  <div id="footer" class="incorrect">
	    <center><h1 id="footerText">Filler text</h1></center>
	  </div>
	</div>
</body>
</html>