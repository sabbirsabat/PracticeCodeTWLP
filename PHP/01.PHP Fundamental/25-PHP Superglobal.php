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
			<h4><?php echo "Subject - PHP Superglobal ";?></h4>
			
		</section>
	<section class="maincontent">
		<hr/>
		PHP Superglobal [$GLOBALS $_SERVER]
		<hr/>


 		<?php

 		//$GLOBAL
 		$x=5;
 		$y=10;
 		function sum(){
 			$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
 		}
 	     sum();
 	     echo "$z";	


 	     echo "<br/>";// line break


 	    //$_SERVER

 	     echo $_SERVER['PHP_SELF'];
 	     echo "<br/>";
 	     echo $_SERVER['SERVER_NAME'];
 	     echo "<br/>";
 	     echo $_SERVER['SCRIPT_NAME'];
 	     echo "<br/>";
 	     echo $_SERVER['HTTP_USER_AGENT'];
 	     echo "<br/>";
 	     echo $_SERVER['SERVER_ADDR']; 

 	

	    ?>
	
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>