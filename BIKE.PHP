<HTML>		
	<head>		
</head>
<body>		
	<?php
		require_once "modules/bike/bikeBL.php";
		$bikeBL = new BikeBL();
		$bikes = $bikeBL->GetBikes();
		
		foreach($bikes as $bike)
		{
			$imagePath = sprintf("Slike/bike/%d,%s", $bike->GetID(),
														$bike->GetNaziv());
			
			printf("
					<div class='card'>
					<a href='#'>
					 <button > <img src='%s'>
					  <h1 class='name'>%s </h1>
					  <p class='price'>%s RSD</p>
					  <p class='name'> %s</p> </button>
					  </a>
					</div>", $imagePath,$bike->GetNaziv(),$bike->GetTipovi());
		}
	
	?>



</body>


</HTML>