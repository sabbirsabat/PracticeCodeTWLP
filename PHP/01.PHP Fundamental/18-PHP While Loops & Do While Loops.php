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
			<h4><?php echo "Subject - PHP While Loops & Do while Loops";?></h4>
			
		</section>
	<section class="maincontent">
      
 			
 		<?php

 		//While Loops

 			$coding="Java";

 			switch ($coding) {
 				    case "html":
 					echo "I love html";
 					break;

 					case "css":
 					echo "I love css";
 					break;

 					case "php":
 					echo "I love php";
 					break;

 				    case "Javaa":
 					echo "I love Java";
 					break;

 				default:
 					echo "I love programming";



 					 echo "<br/>"; //it's not practice code just for line break..

          // Do while Loops 


 			$x=7;
 			do{
 				echo "This number is: $x <br/>";
 				$x++;
 			}while ( $x<= 5) ;
 			
 				
 			}
				
	    ?>
			

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>