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
			<h4> SUBJECT: PHP array_column() </h4>	
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

		$name = array(
				    array(
				    	'id'         =>'200',
				    	'first_name' =>'Abdullah',
				    	'last_name'  =>'Mamum'
				    ),

				    array(
				    	'id'         =>'201',
				    	'first_name' =>'Akbor',
				    	'last_name'  =>'Hosain'
				    ),

				    array(
				    	'id'         =>'202',
				    	'first_name' =>'Sabbir',
				    	'last_name'  =>'Sabat' 
				     )
			
		);

		$fni=array_column($name, 'first_name','id');
		//$lastname=array_column($name, "last_name");

		print('<pre>');  
		print_r($fni);
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

		