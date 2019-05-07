<?php
	$fonts="consolas";
	$bgcolor="#4CAF50";
	$fontcolor="#000";       
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>HTML From Handling With PHP & JavaScript</title>
	<style>
	     body{font-family: <?php echo $fonts;?>;background: #000;}
		.phpcoding{width: 800px;margin: 0 auto;background: <?php echo "#ddd";?>;}
		.headeroption, .footeroption {background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor?>;text-align: center;padding: 1px;}
		.headeroption h2,.footeroption h2 {font-size: 30px;}
		.maincontent{min-height: 400px;padding: 40px;}
		p {margin: 0} 
		strong {font-family: consolas;background: #4CAF50;padding: 9px;font-size: 18px;color: #000;
}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "HTML From Handling With PHP & JavaScript";?></h2>		


		</section>
		<section class="maincontent">
		<hr/>
			<strong>Subject: Get Value From a Text Box With PHP</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
