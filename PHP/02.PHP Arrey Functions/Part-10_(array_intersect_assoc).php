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
			<h4> SUBJECT: PHP array_intersect_assoc </h4>	
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
		$array_one=array(
			"a"=>"red", 
			"b"=>"green", 
			"c"=>"blue", 
			"d"=>"yellow"
		);

		$array_two=array(
			"a"=>"red", 
			"b"=>"green", 
			"c"=>"blue", 
			"d"=>"yellow" 
			
		);
		$array_three=array(
			"a"=>"red", 
			"b"=>"green", 
			"g"=>"blue",
			"d"=>"yellow"
			
		);
		
	
		$result=array_intersect_assoc($array_one, $array_two, $array_three);
		
	
		print('<pre>');   
		print_r($result);  
		print('</pre>'); 
		?>   
		 
		
		 
	</section>

	<section class="footeroption">
			<p>&copy;<?php echo date('Y'); ?> Training With Live Project</p>
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>

		