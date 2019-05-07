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
			<h4><?php echo "Subject - PHP Operator : Increment/Decrement Operator";?></h4>
			
		</section>
	<section class="maincontent">

		01. Arithmetic Operators
		02. Assignment Operators
		03. Comparision Operators
		04. Increment/Decrement Operator
		05. Logical Operator
		06. Staring Operator
		07. Arrey Operator

		<hr/>
		04. Increment/Decrement Operator
		<hr/>

<!---for output Single please keep any one, cut other all--->
			 <?php 

			 // There are two kind of Increment/Decrement 1.Pre 2.Post //

			 //Pre Increment
			 $x=5;
			 echo++$x; 
			            echo "<br/>"; //line Break
			

			 //Post Increment
			 $x=5;
			 echo $x++;
			 echo "<br/>";
			 echo $x;


			            echo "<br/>"; //line Break

			 //pre Decrement
			 $x=5;
			 echo--$x;


			            echo "<br/>"; //line Break
			

			 //Post Decrement
			 $x=6;
			 echo $x--;
			 echo "<br/>";
			 echo $x;


			 ?>

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>