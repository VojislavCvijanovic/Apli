<?php

require_once "util.php";
require_once "db/modules/user/userDAL.php";
require_once "classes/user/user.class.php";

class RegisterBL
{
   public function RegisterUser()
   {
	        $mysqli = new mysqli("localhost","root","","dis");
			
			if(ISSET($_POST["username"],$_POST["password"],$_POST["reppass"],$_POST["email"])) 
			{
				
				
				if($_POST['password'] == $_POST['reppass']) 
				{
				$username = trim($_POST["username"]); 
				$email = trim($_POST["email"]); 
				$password = trim($_POST["password"]); 
											  				  																			  				  
				      
					   if($username != "" && $email != "" && $password != "") 
					   {
						   $query = sprintf("INSERT INTO KORISNIK
											(USERNAME, PASSWORD, EMAIL,POSLEDNJE_LOGOVANJE, ID_STATUS, ID_ROLA) 
											VALUES 
											('%s','%s','%s', NULL, %d, %d)",
											$username,
											$password,
											$email,										
											USER_STATUS_VERIFICATION,
											USER_ROLE_USER
											); 
										
								$mysqli = new mysqli("localhost","root","","dis");
								$mysqli->query($query);						

								if($mysqli->errno)
								{
									printf("Greska prilikom unosa korisnika [%d]:%s",$mysqli->errno, $mysqli->error);
									exit();
								}
								
								$userID = $mysqli->insert_id;
								
								$verificationCode = rand(100000,999999); 
								
									$query = sprintf("INSERT INTO EMAIL_VERIFIKACIJA(ID_KORISNIK, EMAIL, VERIFIKACIONI_KOD, ID_STATUS)
													  VALUES(%d,'%s','%s',%d)",
													  $userID,
													  $email,
													  $verificationCode,
													  EMAIL_VERCODE_GENERATED
													  ); 
													  
									$mysqli = new mysqli("localhost","root","","dis");				  
													  
									$mysqli->query($query);
									if($mysqli->errno)
									{
										printf("Greska prilikom unosa verifikacionog koda [%d]:%s",$mysqli->errno, $mysqli->error);
										exit();
									}
									
										$mailContent = sprintf("<div class='mailcontent'>
										   <h1> Jos samo jedan korak! </h1>
											   <div >
												  Кликните <a href='http://localhost/zavrsni.rad/Verification.php?code=%s&email=%s
												  '> OVDE </a> da budete deo najvece grupe zadovonljih biciklista!
											   </div>
											</div>",
											 $verificationCode,
											 $email);	
											 
										@mail($email,"Verifikacioni kod",$mailContent); 
						
						
										$query = sprintf("UPDATE EMAIL_VERIFIKACIJA
												  SET ID_STATUS = %d,
													  VREME_SLANJA_KODA = CURRENT_TIMESTAMP
												  WHERE 
													 EMAIL = '%s'
													 AND VERIFIKACIONI_KOD = '%s'",
													 EMAIL_VERCODE_SENT,
													 $email,
													 $verificationCode);
									 
									    
										$mysqli -> query($query);
										if($mysqli->errno)
										{
											printf("Greska prilikom slanja mejla [%d]:%s",$mysqli->errno, $mysqli->error);
											
										}
					                    else
										{
	                           
										 printf("<h1> EMAIL je uspesno poslat </h1>
										%s",
										$mailContent);
										
										 
										}
						}
			}
										else
										{
											 $_SESSION['message'] = "Vasa sifra se ne podudara";
										}
		   }
   }
}
		   


?>