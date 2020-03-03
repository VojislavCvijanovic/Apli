<?php 
   require_once "modules/user/LoginBL.php";
   require_once "util.php";

   if(session_id() === "")
   {
	 session_start();
   }
   
   $loginBL = new LoginBL();
   $user = $loginBL->getUserSession();
   
   $isUserLogged = false;
	if($user != null)
	{
		$isUserLogged = true;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="stylebiciklovi.css" rel="stylesheet" type="text/css">
		 
</head>
	<body>
	
		<?php
			require_once "includes/Navbar.php";
		?>
		
		
		
		<section class="gallery-links">
		
			   <div class="gallery-container">
			   
						   <?php
						   
						   include_once "includes/dbh.inc.php";
						   
						   $sql = "SELECT * 
									 FROM BICIKLI
									 ORDER BY REDNI_BROJ DESC;";
						   
									 
							$stmt = mysqli_stmt_init($conn);
							if(!mysqli_stmt_prepare($stmt,$sql))
							{
								echo "SQL nije uspeo da pripremi";
							}
							else
							{
								mysqli_stmt_execute($stmt);
								$result = mysqli_stmt_get_result($stmt);
								
								while($row = mysqli_fetch_assoc($result))
								{
									 echo   '<a href="#" class="gallery-img">
									  <div style="background-image:url(Slike_Bicikli/'.$row["NAZIV"].');"></div> 
									 <h3>'.$row["CENA"].' </h3>
									 <p>'.$row["OPIS"].'</p>
								     </a>';
									 
										
								}
							}     
						   
							 ?>		

							 
			   </div> <!-- END container-->
<?php 

      /*       if($isUserLogged)
			 {
                echo '<div class="gallery-upload">
			     <form action="includes/bicikli-upload.inc.php" method="post" enctype="multipart/form-data">
				    <input type="text" name="filename" placeholder="Naziv Bicikla">
				    <input type="text" name="filetitle" placeholder="CENA">
				    <input type="text" name="filedesc" placeholder="OPIS">
				    <input type="file" name="file">
					<button type="submit" name="submit"> Upload </button>
				 </form>
				</div> ';      
			 } */
			
 if($isUserLogged)
 {	
	 echo ' <div class="login">		 
      <div class="form">
	  <form action="includes/bicikli-upload.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="Naziv Bicikla"> 
        <input type="text" name="filetitle" placeholder="CENA">      
        <input type="text" name="filedesc" placeholder="OPIS">
		<input type="file" name="file">
		<button type="submit" name="submit"> Upload </button>
      </div>
        </form>
		</div>';
 }			 
				?>
				
					</div>
		</section
</div> 
  </body>
</html>