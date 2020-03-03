<?php 

session_start();?>






<!DOCTYPE html>
 <html>
     <head>
	     <meta charset="UTF-8">
		 <title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="styledelovi.css" rel="stylesheet" type="text/css">
	 </head>
	 
	<body class= "front" >
	
		<div id= "wraper">
			<div id= "header">		
				<?php
			require_once "includes/Navbar.php";
		?>
		
			</div> <!-- End header -->
			
			
			 
		<div id="card-container">
			     <div class="card">
				 <a href="pocetna.php">
				 <button>	  <img src="Slike/brake-1.jpg" alt="brake1" >
					  <h1 class="name">Brake ultra 300xs</h1>
					  <p class="price">1.195 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button>
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
				 <button>	  <img src="Slike/brake-2.jpg" alt="brake2" >
					  <h1 class="name">Complet disk xtc 100 pro </h1>
					  <p class="price">9.562RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button> 
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
					 <button > <img src="Slike/brake-3.jpg" alt="brake3" >
					  <h1 class="name">Shimano all roud pro</h1>
					  <p class="price">3.654 RSD</p>
					  <p class="name"> Lorem Ipsum is simply dummy text of the printing...</p> </button>
					  </a>
					</div>
				</div>  <!-- End Card-container -->	
				
				 <div id="youtube">				 
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/ppgthzi9_0Y" 
						frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315" 
						src="https://www.youtube.com/embed/avyzYh4wL8k"
						frameborder="0" allow="accelerometer; autoplay; 
						encrypted-media; gyroscope; picture-in-picture" 
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/kEfrYFza3dQ"
						frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
					</div>														 
				 </div><!-- End youtube -->	
		   
		</div> <!-- End wraper -->
	</body>
 </html>