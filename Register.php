<?php
session_start();
	$_SESSION["message"] = '';

		require_once "modules/user/RegisterBL.php";


	
	$registerBL = new RegisterBL();
	$registerBL->RegisterUser();







?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Biciklizam</title>
	<meta charset="UTF-8">
	<title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="stylelogin.css" rel="stylesheet" type="text/css">
		 
</head>
<body>
	
			<div class="login">
				  <div class="form">
					<form action="Register.php" method="POST">
					  <input type="text" placeholder="Name"  name="username" required />
					  <input type="password" placeholder="Password" name="password" required />
					   <input type="password" placeholder="Repeat password" name="reppass" required />
					  <input type="text" placeholder="Email address"  name="email" required />
					  <input type="submit" value="Create" name="btnsubmit" class="btnlogin">
					  <p class="message">Already registered? <a href="Login.php">Sign In</a></p>
					</form>
	
  </div>
</div>
				</div><!-- End form -->
		</div><!-- End login-page -->
</body>
</html>