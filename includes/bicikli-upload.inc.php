<?php

if(session_id() === "")
   {
	 session_start();
   }


 if(isset($_POST['submit']))
 {
	 $newFileName = $_POST['filename'];
	 if(empty($newFileName))
	 {
		 $newFileName = "bicikli";
	 }
	 else
	 {
		 $newFileName = strtolower(str_replace(" ", "-", $newFileName));
	 }
	 
	 $imageTitle = $_POST['filetitle'];
	 $imageDesc = $_POST['filedesc'];
	 
	 $file = $_FILES['file'];
	 
	 $fileName = $file["name"];
	 $fileType = $file["type"];
	 $fileTempName = $file["tmp_name"];
	 $fileError = $file["error"];
	 $fileSize = $file["size"];
	 
	 $fileExt = explode(".", $fileName);
	 $fileActualExt = strtolower(end($fileExt));
	 
	 $allowed = array("jpg","jpeg","png");
	 
	    if(in_array($fileActualExt,$allowed))
		{
			if($fileError === 0)
			{
				if($fileSize < 2000000)
				{
					$imageFullName = $newFileName . "." . uniqid("", true).".". $fileActualExt;
					$fileDestination = "../Slike_Bicikli/" . $imageFullName;
					
					include_once "dbh.inc.php";
					
					if(empty($imageTitle) || empty($imageDesc))
					{
                       header("Location:../insertBike.php?upload=empty");
					   exit();
					}
                    else
					{
                        $sql = "SELECT *
					              FROM BICIKLI;";
								  
					    $stmt = mysqli_stmt_init($conn);
						if(!mysqli_stmt_prepare($stmt,$sql))
						{
							echo "SQL statement nije uspeo!";
						}
						else
						{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);
							$rowCount = mysqli_num_rows($result);
							$setImageOrder = $rowCount +1;
							
							$sql = "INSERT INTO Bicikli(NAZIV,CENA,OPIS,REDNI_BROJ)
							          VALUES(?,?,?,?);";
									  
						    if(!mysqli_stmt_prepare($stmt,$sql))
						    {
							    echo "SQL statement inspert neuspesan!";
						    }
							else
							{
								mysqli_stmt_bind_param($stmt,"ssss", $imageFullName,$imageTitle,$imageDesc,$setImageOrder);
								mysqli_stmt_execute($stmt);
								
								move_uploaded_file($fileTempName,$fileDestination);
								
								header("Location:../insertBike.php?upload=sucess");
							}
						}
					}						
				}
				else
				{
					echo "Velicina fajla je velika";
				}
			}
			else
			{
				echo "Polja nisu ispunjena!";
			}
		}
		else
		{
			echo  "Format treba da bude tipa jpg,jpeg,png";
		}
 }

?>