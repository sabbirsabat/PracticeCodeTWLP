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
			<h4><?php echo "Subject - PHP Operator : Arrey Operator";?></h4>
			
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
		07. Arrey Operator
		<hr/>

<!---for output Single please keep any one, cut other all--->
 			 <?php 

 			 // Union
 			 	$x=array(

 			 		"a"=>"Dhaka",
 			 		"b"=>"Sylhet"

 			 			);

 			 	$y=array(

 			 		"c"=>"Comilla",
 			 		"d"=>"Rajshahi"

 			 			);
 			 	
 			 	var_dump($x+$y);



 			 	// (==)

 			 	$x=array(

 			 		"a"=>"Dhaka",
 			 		"b"=>"Sylhet"

 			 			);

 			 	$y=array(

 			 		"c"=>"Comilla",
 			 		"d"=>"Rajshahi"

 			 			);

 			 	var_dump($x==$y);



 			 	// (===)

 			 	$x=array(

 			 		"a"=>"Dhaka",
 			 		"b"=>"Sylhet"

 			 			);

 			 	$y=array(

 			 		"c"=>"Comilla",
 			 		"d"=>"Rajshahi"

 			 			);

 			 	var_dump($x==$y);



 			 	// (!=) or like (<>)

 			 	$x=array(

 			 		"a"=>"Dhaka",
 			 		"b"=>"Sylhet"

 			 			);

 			 	$y=array(

 			 		"c"=>"Comilla",
 			 		"d"=>"Rajshahi"

 			 			);

 			 	//var_dump($x!=$y);
 			 	var_dump($x<>$y);



 			 	// (!==) 

 			 	$x=array(

 			 		"a"=>"Dhaka",
 			 		"b"=>"Sylhet"

 			 			);

 			 	$y=array(

 			 		"c"=>"Comilla",
 			 		"d"=>"Rajshahi"

 			 			);

 			 	//var_dump($x!==$y);
 			 	

			 ?>
			

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>