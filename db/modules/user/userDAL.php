<?php

  require_once "db/classes/user/CheckCredentialsRequest.class.php";
  require_once "db/db.class.php";
  require_once "db/classes/user/CheckCredentialsResponse.class.php";
  
  class UserDAL
  {
		public function CheckCredentials($credentialsRequest)
		{
			$query = sprintf("SELECT
								  k.ID_KORISNIK,
								  k.USERNAME,
								  k.EMAIL,
								  k.POSLEDNJE_LOGOVANJE,
								  k.ID_STATUS,
								  k.ID_ROLA
							  FROM KORISNIK k
							  WHERE
							     k.USERNAME = '%s'
							 AND k.PASSWORD = '%s'",
							 $credentialsRequest->GetUsername(),
							 $credentialsRequest->GetPassword());
							 
			$result = DBConn::Execute($query);
			
			if($result["affectedRows"] == 1)
			{
			  $response = $this->getCheckCredentialsResponseFromResult($result["data"][0]);
			}
			
			return ISSET($response) ? $response : null;
					
		}
		
		public function SetLastLoginTime($userID)
		{
			$query = sprintf("
			             UPDATE KORISNIK
						 SET POSLEDNJE_LOGOVANJE = CURRENT_TIMESTAMP
						 WHERE ID_KORISNIK = %d
						 ",$userID);
						 
			$result = DBConn::Execute($query);
			
			$success = false;
			if($result["affectedRows"] == 1)
		    {
				$success = true;
			}
			return $success;
		}
		
		
		private function getCheckCredentialsResponseFromResult($data)
		{
			$credentials =  new CheckCredentialsResponse($data["ID_KORISNIK"],
														 $data["USERNAME"],
														 $data["EMAIL"],
														 $data["POSLEDNJE_LOGOVANJE"],
														 $data["ID_STATUS"],
														 $data["ID_ROLA"]);
														 
		    return $credentials;
		}
  }


?>