<?php

 class CheckCredentialsRequest
 {
	 private $username;
	 private $password;
	 
	 public function __construct($username,$password)
	 {
		$this->username = $username; 
		$this->password = $password; 
	 }
	 
	 public function GetUsername()
	 {
		 return $this->username;
	 }
	 public function GetPassword()
	 {
		 return $this->password;
	 }
 }

?>