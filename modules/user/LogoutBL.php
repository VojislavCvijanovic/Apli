<?php

   require_once "modules/user/LoginBL.php";

   if(session_id() === "")
   {
	 session_start();
   }
   
   $loginBL = new LoginBL();
   $user = $loginBL->getUserSession();
   
    $isUserLogged = false;
	if($user != null)
	{
		UNSET($_SESSION["user"]);
		session_destroy();
	}   
		   header("Location:login.php");
		   exit;
	   


?>