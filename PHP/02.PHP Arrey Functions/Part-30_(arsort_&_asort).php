<?php
	$fonts="Consolas";
	$bgcolor="#181915";
	$fontcolor="#F87015";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Type</title>
	<style>
	     body{font-family: <?php echo $fonts;?>}
		.phpcoding{width: 1000px;margin: 0 auto;background: <?php echo "#282923";?>;}
		.headeroption, .footeroption {background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor?>;text-align: center;padding: 20px}
		.headeroption h2, .footeroption h2{margin:0}
		.maincontent{min-height: 400px;padding: 40px;font-size: 16px;color:<?php echo $fontcolor?>}
		p {margin: 0} 
		input[type="text"]{width:250px;}
	</style> 
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP ARRAY FUNCTION";?></h2>	
			<h4> SUBJECT: PHP array_arsort() & asort()</h4> 	
		</section> 

	<section class="maincontent">
		<hr/>
			SABBIR SABAT
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>  
			</span>
		<hr/>

		<?php

		$num=array(
			"Akbor"=>"35.",
			"Mamaun"=>"40.",
			"Sabbir"=>"30.",
			"Hasan"=>"28."
		);
		asort($num);  //asort for decending
		foreach ($num as $name => $age) {
			echo "Name: ".$name.", Age: ".$age."<br/>";
		}



		
		/*-------------------------
		$name=array(
			"Akbor"=>"Biology.",
			"Mamaun"=>"Maths.",
			"Sabbir"=>"Accounting.",,
			"Hasan"=>"Bengali."
		);

		*/

		
		
		/*	
		print('<pre>');   
		print_r($result);  
		print('</pre>');
		*/
	   
		
		?> 
				
		 
	</section>

	<section class="footeroption">
			<p>&copy;<?php echo date('Y'); ?> Training With Live Project</p>
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>

		