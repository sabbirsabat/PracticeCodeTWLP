<?php
	$fonts="Consolas";
	$bgcolor="#444";
	$fontcolor="#ffffff";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>JQuery Fundamentals</title>

	<style>
	     body{font-family: <?php echo $fonts;?>}
		.phpcoding{width: 800px;margin: 0 auto;background: <?php echo "#ddd";?>;}
		.headeroption, .footeroption {background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor?>;text-align: center;padding: 20px}
		.headeroption h2, .footeroption h2{margin:0}
		.maincontent{min-height: 400px;padding: 40px;}
		p {margin: 0} 
		.para{height: 150px; width: 650px;background: #fff;border: 1px solid #999;padding: 20px;margin-top:10px; display: none;}
	</style>
	
	<script src="js/Jquery.js"></script>
	
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "JQuery Fundamentals";?></h2>
			
		</section>