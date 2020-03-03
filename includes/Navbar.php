<?php
	if (session_id() === "")
	{
		session_start();
	}
	require_once "util.php";
	require_once "modules/user/LoginBL.php";
	$login = new LoginBL();
	$user = $login->getUserSession();
	
	$isUserLogged = false;
	if($user != null)
	{
		$isUserLogged = true;
	}


?>


	<div class= "nav">
					
		
		 <?php
			if($isUserLogged)
			{
				echo "<div class='logout'><a href='logout.php'>Logout</a></div>";
			}
			else
			{
				echo " <div class='login'><a href='login.php'>Log in</a></div>";
			}
		 ?>
		 
		 <?php
			if ($isUserLogged && $user->GetRoleID () == USER_ROLE_ADMIN)
			{	
				echo "<div class = 'bike'><a  href='InsertBike.php'>Unesi bicikli</a></div>";
			}
		
		 ?>
		 
		<div class= "only">
		<a  href="Pocetna.php">Početna</a>
		</div> <!-- End only -->
		
		<div class="dropdown">
			<button class="dropbtn">Bicikli
			 <i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-content">
				  <a href="Road.php">Road</a>
				  <a href="MTB.php">MTB</a>
				  <a href="City.php">City</a>
				  <a href="Children.php">Children</a>
				</div>
		 </div> 
		 
		  <div class="dropdown">
			<button class="dropbtn">Delovi
			 <i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-content">
				  <a href="Tocak.php">Točak</a>
				  <a href="Pogon.php">Pogon</a>
				  <a href="Kocnice.php">Kočnice</a>							 
				</div>
		 </div>
		
		 <div class="dropdown">
			<button class="dropbtn">Oprema
			 <i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-content">
				  <a href="Rukavice.php">Rukavice</a>
				  <a href="Kacige.php">Kacige</a>
				  <a href="Ostalo.php">Ostalo</a>					
				</div>
		 </div> 				
		 <div>
		 <a href="Kontakt.php">Kontakt</a>
		 </div>
		 <div>
		 <a href="O Nama.php">O Nama</a>
		 </div>
		 <form action="Navbar.php" method="POST">
		 <div>
		 <input type="text" name="Search" placeholder="Search.."/>		
		 </div>
		 </form>
		
	</div> <!-- End nav -->
	