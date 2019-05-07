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
		.maincontent{min-height: 400px;padding: 40px;color:<?php echo $fontcolor?>}
		p {margin: 0} 
		input[type="text"]{width:250px;}
	</style> 
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP ARRAY FUNCTION";?></h2>	
			<h4> SUBJECT: PHP array () function -Create Array </h4>	
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

		//Indexed array

		$car=array("Volvo","BMW","Toyota");
		$length=count($car);
		for ($i=0; $i<$length; $i++) { 
			echo $car[$i]."<br/>";
		}


		//Associative Array
		echo "<br/>";
		//-----------------

		$age=array(
			"Abdullah" =>"30",
			"Jamal"    =>"32",
			"Mamun"    =>"28",
			"Habib"    =>"25"
		);
		foreach ($age as $key => $value) {
			echo "Name= ".$key.",Age= ".$value;
			echo "<br/>";
		}


		//Multi-Dymentional  Array
		echo "<br/>";
		//------------------------

		$car=array(
			array("volvo","100","90"),
			array("BMW","40","30"),
			array("Toyota","120","100"),
			array("Audi","100","90")
		);

		echo $car[2][0];

		?>   
		 
		
		 
	</section>

	<section class="footeroption">
			<p>&copy;<?php echo date('Y'); ?> Training With Live Project</p>
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>

		