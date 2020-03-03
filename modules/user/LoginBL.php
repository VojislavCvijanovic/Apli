<?php

  require_once "util.php";
  require_once "db/classes/user/CheckCredentialsRequest.class.php";
  require_once "db/modules/user/userDAL.php";
  require_once "classes/user/user.class.php";

 class LoginBL
 {
    	public function LoginUser()
		{
			if(ISSET($_POST["username"],$_POST["password"],$_POST["btnsubmit"]))
			{
				 $username = trim($_POST["username"]);
				 $password = trim($_POST["password"]);
				 
				 if($username != "" && $password != "") 
				 {
					 $credentialsRequest = new CheckCredentialsRequest($username,$password);
					 
					 $userDAL = new UserDAL(); 
					 
					 $credentialsDAL = $userDAL->CheckCredentials($credentialsRequest);
					 
					 $user = $this->mapCredentialsDALToUser($credentialsDAL); 
					 
					 $this->setUserSession($user); 
					 
					 $success = $userDAL->SetLastLoginTime($user->GetID()); 
					 
					 if($success)
					 {
						 $this->redirect("Pocetna.php");
					 }
					 
					 switch($user["ID_KORISNIK_STATUS"])
					 {
						 case USER_STATUS_VERIFICATION:
						    printf("Niste verifikovali mejl. Pre logovanja morate da verifikujete email adresu.");
							break;
							
						 case USER_STATUS_ACTIVE:
						    printf("uspesno ste se ulogovali %s", $user["USERNAME"]);
							break; 
						 case USER_STATUS_DISABLED:
						    printf("vas nalog je iskljucen zbog neaktivnosti");
							break;
						 case USER_STATUS_BLOCKED:
						    printf("vas nalog je blokiran zbog zabranjenih radnji");
							break;
						 case USER_STATUS_DEACTIVATED:
						    printf("vas nalog je deaktiviran");
							break;
					 }			 
				 }	
			if($username = "" || $password = "")
			{
				$this-redirect("Pocetna.php");
			}
			}
		}
		
		public function  CheckLoginStatusAndRedirect($currentPage)
		{
			$user = $this->getUserSession();
			if ($user != null)//ako je korisnik na stranici log in uradi redirekciju na pocetnu
			{
				switch($currentPage)
				{
					case "login":
						$this->redirect("Register.php");
						break;
				}
			}
			else
			{
				switch($currentPage)
				{
					case "home":
					$this->redirect("Login.php");
					break;
				}//ako je korisnik na stranici home prebaci ga na log in
			}
		}
		
		private function redirect($url)
		{
			header("Location:$url");
			exit;
		}

         public function setUserSession($user)
		{
			$_SESSION["user"] = serialize($user);
		}
		
		public function getUserSession()
		{
			$user = null;
			if(ISSET($_SESSION["user"]))
			{
				$user = unserialize($_SESSION["user"]);
			}
			return $user;
		}
        
        private function mapCredentialsDALToUser($credentialsDAL)
		{
			$user = new User(   $credentialsDAL->GetID_KORISNIK(),
								$credentialsDAL->GetUSERNAME(),
								$credentialsDAL->GetEMAIL(),
								$credentialsDAL->GetPOSLEDNJE_LOGOVANJE(),
								$credentialsDAL->GetID_STATUS(),
								$credentialsDAL->GetID_ROLA());
							
			return $user;
		}			
 }

?>