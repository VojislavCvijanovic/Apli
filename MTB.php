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
				 <button>	  <img src="Slike/MTB-1.png" alt="MTB-1" >
					  <h1 class="name">WHISTLE Fischietto Lakota 1161D 406H 27SPD</h1>
					  <p class="price">299.699 RSD RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button>
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
				 <button>	  <img src="Slike/MTB-2.png" alt="MTB-2" >
					  <h1 class="name">Trail Neo 2 VUG LG</h1>
					  <p class="price">246.987 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button> 
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
					 <button > <img src="Slike/MTB-3.png" alt="MTB-3" >
					  <h1 class="name">Habit 6</h1>
					  <p class="price">159.321 RSD</p>
					  <p class="name"> Lorem Ipsum is simply dummy text of the printing...</p> </button>
					  </a>
					</div>
				</div>  <!-- End Card-container -->				 
				 <div id="youtube">				 
					<div class="smally">
						<iframe width="560" height="315" 
						src="https://www.youtube.com/embed/o5iWN1460So"
						frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture" 
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/eD1LBzKTlCE"
						frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/iTHB7royjSs"
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