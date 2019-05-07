<?php
$fonts="verdana";
$bgcolor="#444";
$fontcolor="#FF9800"
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Type</title>
	<style>
	     body{font-family: <?php echo $fonts;?>}
		.phpcoding{width: 900px;margin: 0 auto;background: <?php echo "#ddd";?>;}
		.headeroption, .footeroption {background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor?>;text-align: center;padding: 20px}
		.headeroption h2, .footeroption h2{margin:0}
		.maincontent{min-height: 400px;padding: 40px;}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamentals Training";?></h2>
			<h4><?php echo "Subject - PHP Constant";?></h4>
			
		</section>


		<!---Code Starting This Now-->


	<section class="maincontent">
		
			<!--1. if is load 1 must be cut number 2 , Otherwise output show Error-->
			<?php 

			define("MALEK","Malek Hoite Shabdhan");
			function MALEKTOWER(){
				echo MALEK;
			}
			MALEKTOWER();

			 ?>
			 
			<!--2. if is load 2 must be cut number 1, Otherwise output show Error-->

			 <?php 
			 /* return method start*/
			define("MALEK","Malek Hoite Shabdhan"); 

			function malektower(){
				return MALEK;
			}
			echo malektower();
			/* return method stop*/
			 ?>

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>