
<!DOCTYPE html>
 <html>
     <head>
	     <meta charset="UTF-8">
		 <title> Biciklizam </title>
		 
		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		 
		 <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet"> 
		 <link href="stylehome.css" rel="stylesheet" type="text/css">
	 </head>
	 
	<body class= "front" onload="showAlert()">
		<script>
			 function showAlert() {
			var myText = "Svaki nas registrovani korisnik ima beneficije na ovom sajtu.        Registrujte se odmah i budite i Vi deo nase biciklisticke ekipe!"							
			alert (myText);
						    }
			</script>
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
				
				
			</main><!-- End main -->
			
			<div id="footer">
			
			<div id="footerCopyright">
				<p> Copyright <a href="#"> Cvijanovic Vojislav </a></p>
		   </div> <!--end footerCopyright-->
		   </div> <!--end footer-->
	
		</div> <!-- End wraper -->
	
	</body>
 </html>