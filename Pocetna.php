<?php 
	if (session_id() === "")
	{
		session_start();
	}
	require_once "modules/user/LoginBL.php";
	
	$login = new LoginBL;
	$login->CheckLoginStatusAndRedirect("home");// pozivamo klasu i proveravamo da li je user logovan

?>






<!DOCTYPE html>
 <html>
     <head>
	     <meta charset="UTF-8">
		 <title> Biciklizam </title>
		 <link href="stylehome.css" rel="stylesheet" type="text/css">
	 </head>
	 
	<body class= "front">
		<div id= "wraper">
			<div id= "header">		
				<?php
					require_once "includes/Navbar.php";
				?>
			</div> <!-- End header -->
			
			<div id="main">
			
				<div class="proba">
					<h1>"Sreću ne možeš kupiti ali možeš kupiti bicikli, to je dovoljno blizu..."</h1>
				</div>
				
				
			<!--	<div class="ma">
				<h1>Novosti</h1>
				</div>
				
			<div id="card-container">								
			     <div class="card">
				 <a href="https://www.tech-lifestyle.com/lifestyle/ovih-6-bicikala-su-najbolji-na-svetu/">
				 <button>	  <img src="Slike/novosti-3.jpg" alt="MTB-1" >
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button>
					  </a>
				</div>
				
				    <div class="card">
					<a href="https://fanatic.rs/blog/fruskogorski-mtb-maraton-prijave-info-rezultati/">
				 <button>	  <img src="Slike/novosti-2.jpg" alt="MTB-2" >					 				 
					  <p class="name">Sve u vezi fruskogorskog maratona </p></button> 
					  </a>
				</div>
				
				    <div class="card">
					<a href="https://www.blic.rs/vesti/beograd/oprez-na-dva-tocka-beogradani-ovo-treba-da-znate-pre-nego-sto-sednete-na-bicikl/wsgkd77">
					 <button > <img src="Slike/novosti-1.jpg" alt="MTB-3" >					 					
					  <p class="name"> OPREZ NA DVA TOČKA Beograđani,
								ovo treba...</p> </button>
					  </a>
					</div>
				</div>  <!-- End Card-container -->
				
				
			
			
			</div><!-- End main -->
				
	
		</div> <!-- End wraper -->
	
	</body>
 </html>