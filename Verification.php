<?php
require_once "util.php";

if(ISSET($_GET["code"],$_GET["email"]))
{
	$code = trim($_GET["code"]);
	$email = trim($_GET["email"]);

     if($code != "" && $email != "")
	 {
		 $query = sprintf("SELECT 
		                       ev.ID_EMAIL_VERIFIKACIJA,
							   ev.ID_KORISNIK
		                   FROM 
						       EMAIL_VERIFIKACIJA ev
							   
						   WHERE
						       ev.EMAIL = '%s'
							   AND ev.VERIFIKACIONI_KOD = '%s'
							   AND ev.ID_STATUS = %d
							   AND DATEDIFF(CURRENT_TIMESTAMP, ev.VREME_SLANJA_KODA) <= %d",
							   $email,
							   $code,
							   EMAIL_VERCODE_SENT,
							   EMAIL_VERCODE_VALID_PERIOD);
							   						   
	     $mysqli = new mysqli("localhost","root","","dis");
		 $resultDB = $mysqli->query($query);						

		 if($mysqli->errno) 
		 {
		 	printf("Greska prilikom unosa korisnika [%d]:%s",$mysqli->errno, $mysqli->error);
		 	exit();
		 }
		 
		 
		 if($resultDB->num_rows == 0)
		 {
			 printf("Kod nije validan");
			 exit;
		 }
		 
		 while($row = $resultDB->fetch_assoc())
		 {
			 $verificationCodeID = $row["ID_EMAIL_VERIFIKACIJA"];
			 $userID = $row["ID_KORISNIK"];
		 }
		 
		 $query = sprintf("
		           UPDATE EMAIL_VERIFIKACIJA
		           SET ID_STATUS = %d, VREME_REGISTRACIJE = CURRENT_TIMESTAMP
				   WHERE ID_EMAIL_VERIFIKACIJA = %d",EMAIL_VERCODE_VERIFIED, $verificationCodeID);
				   
		 $mysqli->query($query);
		 
		 if($mysqli->errno) 
		 {
		 	printf("Greska prilikom izmene statusa verifikacionog koda [%d]:%s",$mysqli->errno, $mysqli->error);
		 	exit();
		 }
		 
		 $query = sprintf("
		             UPDATE KORISNIK
					 SET ID_STATUS = %d
					 WHERE ID_KORISNIK = %d",
					 USER_STATUS_ACTIVE,$userID);
					 
		 $mysqli->query($query);
		 
		 if($mysqli->errno) 
		 {
		 	printf("Greska prilikom izmene statusa korisnika [%d]:%s",$mysqli->errno, $mysqli->error);
		 	exit();
		 }			 
		 
		 
		  $mysqli->close();
		  
		  echo "Uspesno ste aktivirali mail , ulogujte sе <a href='Login.php'>ovde</a>";
		 
	 }
}	 

?>