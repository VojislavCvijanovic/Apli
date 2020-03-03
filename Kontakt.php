<?php 

session_start();?>






<!DOCTYPE html>
 <html>
     <head>
	     <meta charset="UTF-8">
		 <title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="stylehome.css" rel="stylesheet" type="text/css">
	 </head>
	 
	<body class= "front">
		<div id= "wraper">
			<div id= "header">		
				<?php
			require_once "includes/Navbar.php";
		?>
		
			</div> <!-- End header -->
			
			<div id="kontakt">
				<p> <bold>Kontakt :</bold> TEL:033-330-333
				</p>
				<p> <bold>Adresa :</bold> Mire Jakuzic 65
											Beograd
				</p>
				<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=
				!1m14!1m8!1m3!1d5836.830311871592!2d20.334579!3d42.
				990592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1352d80a
				6e0f000f%3A0x90c58a938e6b6ac0!2sSupermarket%20DRA%C5
				%BDANIN!5e0!3m2!1ssr!2srs!4v1568287683604!5m2!1ssr!2sr
				s" width="600" height="450" frameborder="0" style="border
				:0;" allowfullscreen=""></iframe>
				</div>
				
				
		   </div> <!-- End kontakt -->
		   		<div id="footer">
			
			<div id="footerCopyright">
				<p> Copyright <a href="#"> Cvijanovic Vojislav </a></p>
		   </div> <!--end footerCopyright-->
		   </div> <!--end footer-->
		</div> <!-- End wraper -->
	
	</body>
 </html>