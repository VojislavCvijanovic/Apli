<?php 

session_start();?>






<!DOCTYPE html>
 <html>
     <head>
	     <meta charset="UTF-8">
		 <title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="stylebiciklovi.css" rel="stylesheet" type="text/css">
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
				 <button>	  <img src="Slike/road-1.png" alt="road1" >
					  <h1 class="name">Cannondale SystemSix Hi-MOD
						Ultegra Di2</h1>
					  <p class="price">432.798 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button>
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
				 <button>	  <img src="Slike/road-2.png" alt="road2" >
					  <h1 class="name">700 M SystemSix Crb D/A VLT 47</h1>
					  <p class="price">302.996 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button> 
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
					 <button > <img src="Slike/road-4.png" alt="road4" >
					  <h1 class="name">CAAD Optimo Sora</h1>
					  <p class="price">265.598 RSD</p>
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
							<div id="footer">
			
			<div id="footerCopyright">
				<p> Copyright <a href="#"> Cvijanovic Vojislav </a></p>
		   </div> <!--end footerCopyright-->
		   </div> <!--end footer-->
		</div> <!-- End wraper -->
	
	</body>
 </html>