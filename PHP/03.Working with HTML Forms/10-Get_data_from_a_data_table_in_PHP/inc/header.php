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
		strong {font-family: consolas;background: #4CAF50;padding: 9px;font-size: 18px;color: #000;}
		
		input[type=text],select {width: 200px;}

		.tblone{width: 400px;border: 1px solid #fff; margin: 20px 0px}
		.tblone td{padding: 5px 10px;}
		table.tblone tr:nth-child(2n+1){background: #fff;height: 30px;}
		table.tblone tr:nth-child(2n){background: #f1f1f1;height: 30px;}
		#myform{width: 400px; border: 1px solid #000;padding: 10px;}

	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "HTML From Handling With PHP & JavaScript";?></h2>		


		</section>
		<section class="maincontent">
		<hr/>
			<strong>Subject: Get Selected Option Value in PHP</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
