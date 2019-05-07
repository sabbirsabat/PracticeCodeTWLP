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
			<h4><?php echo "Subject - PHP Variable Scope";?></h4>
			
		</section>
	<section class="maincontent">
      

 		<?php

 		$x=15;

 		function test1(){
 			global $x;
 			$a=5;
 			echo $a;
 			echo "<br/>";
 			echo "Access from function test1 : $x";
 			echo "<br/>";

 		}

 		function test2(){
 			global $x;
 			$b=10;
 			echo $b;
 			echo "<br/>";
 			echo "Access from function test2 : $x";

 		}
 		test1();
 		test2();


	    ?>
			
	
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>