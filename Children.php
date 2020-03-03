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
				<div class= "nav">
					<?php
					require_once "includes/Navbar.php";
				?>
		
			</div> <!-- End header -->
			
			
			 
		<div id="card-container">
			     <div class="card">
				 <a href="pocetna.php">
				 <button>	  <img src="Slike/children-1.png" alt="children-1" >
					  <h1 class="name">Good Child Bicycle,20 Inch Bmx </h1>
					  <p class="price">45.952 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button>
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
				 <button>	  <img src="Slike/children-2.png" alt="children-2" >
					  <h1 class="name">New 16" Steel Frame Children BMX</h1>
					  <p class="price">35.987 RSD</p>
					  <p class="name">Lorem Ipsum is simply dummy text of the printing...</p></button> 
					  </a>
				</div>
				
				    <div class="card">
					<a href="pocetna.php">
					 <button > <img src="Slike/children-3.png" alt="children-3" >
					  <h1 class="name">12" Nickelodeon Paw Patrol</h1>
					  <p class="price">51.456 RSD</p>
					  <p class="name"> Lorem Ipsum is simply dummy text of the printing...</p> </button>
					  </a>
					</div>
				</div>  <!-- End Card-container -->				 
				 <div id="youtube">				 
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/imPQ3lysWnU"
						frameborder="0" allow="accelerometer; autoplay;
						encrypted-media; gyroscope; picture-in-picture" 
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/zqPkNv5gJOk"
						frameborder="0" allow="accelerometer; autoplay; 
						encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
					</div>
					
					<div class="smally">
						<iframe width="560" height="315"
						src="https://www.youtube.com/embed/7lHuk4rp8PY"
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