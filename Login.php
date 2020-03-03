<?php
	if (session_id() === "")
	{
		session_start();
	}
	require_once"modules/user/LoginBL.php";

	$loginBL = new LoginBL();    
	$loginBL->CheckLoginStatusAndRedirect("login");
	$loginBL->LoginUser();   
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="stylelogin.css" rel="stylesheet" type="text/css">
		 
</head>
<body>
	
			<div class="login">
				  <div class="form">					  
					<form action="Login.php" method="POST" name="login">
					  <input type="text" name="username" placeholder="Username" required />
					  <input type="password"  name="password" placeholder="Password" required />					 
					  <input type="submit" name="btnsubmit" value="Log In"  class="btnlogin">
					  <p class="message">Not registered? <a href="Register.php">Create an account</a></p>
					</form>
	
  </div>
</div>
				</div><!-- End form -->
		</div><!-- End login-page -->
</body>
</html>