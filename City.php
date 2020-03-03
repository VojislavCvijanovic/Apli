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
	 
	<body class= "front" onload="showAlert()">
		<div id= "wraper">
			<div id= "header">		
				<?php
			require_once "includes/Navbar.php";
		?>
		
			</div> <!-- End header -->
			
			
			 
		<div id="card-container">
			     <div class="card">
				 <a href="pocetna.php">
				 <button>	  <img src="Slike/city-1.png" alt="city-1" >
					  <h1 class="name">Cannondale SCALPEL
						</h1>
					  <p class="price">43.654 RSD RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button>
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
				 <button>	  <img src="Slike/city-2.png" alt="city-2" >
					  <h1 class="name">Quick 8 Women's</h1>
					  <p class="price">75.985 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button> 
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
					 <button > <img src="Slike/city-3.png" alt="city-3" >
					  <h1 class="name">Quick CX 3</h1>
					  <p class="price">52.065 RSD RSD</p>
					  <p class="name"> Lorem Ipsum is simply dummy text of the printing...</p> </button>
					  </a>
					</div>
					
					<div class="card">
					<a href="pocetna.php">
					 <button > <img src="Slike/city-4.png" alt="city-4" >
					  <h1 class="name">Quick HRX PRO 3</h1>
					  <p class="price">89.999 RSD RSD</p>
					  <p class="name"> Lorem Ipsum is simply dummy text of the printing...</p> </button>
					  </a>
					</div>					
				</div>  <!-- End Card-container -->				 
				 <div id="youtube">				 
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/Spmu_BQq-L8
						" frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/gNzTeEzciec"
						frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/3URdWNhYs4A"
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