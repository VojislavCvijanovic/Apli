<?php

 class User 
 {
	private $id;  
    private $username;	
    private $email;		
    private $lastLoginTime;
    private $statusID;
    private $roleID;
	
	public function __construct($id,$username,$email,$lastLoginTime,$statusID,$roleID) 
	
	{
		$this->id = $id;
		$this->username = $username;
		$this->email = $email;
		$this->lastLoginTime = $lastLoginTime;
		$this->statusID = $statusID;
		$this->roleID = $roleID;
	}
	
	 public function GetID()
	 {
		 return $this->id;
	 }
	 public function SetID()
	 {
		 $this->id = $id;
	 }
	 
	 public function GetUsername()
	 {
		 return $this->username;
	 }
	 public function SetUsername()
	 {
		 $this->username = $username;
	 }
	 
	 
	 public function GetEmail()
	 {
		 return $this->email;
	 }
	 public function SetEmail()
	 {
		 $this->email = $email;
	 }
	 	 
	 public function GetLastLoginTime()
	 {
		 return $this->lastLoginTime;
	 }
	 public function SetLastLoginTime()
	 {
		 $this->lastLoginTime = $lastLoginTime;
	 }
	 
	 
	 public function GetStatusID()
	 {
		 return $this->statusID;
	 }
	 public function SetStatusID()
	 {
		 $this->statusID = $statusID;
	 }
	 
	 
	 public function GetRoleID()
	 {
		 return $this->roleID;
	 }
	 public function SetRoleID()
	 {
		 $this->roleID = $roleID;
	 }
	
 }


?>