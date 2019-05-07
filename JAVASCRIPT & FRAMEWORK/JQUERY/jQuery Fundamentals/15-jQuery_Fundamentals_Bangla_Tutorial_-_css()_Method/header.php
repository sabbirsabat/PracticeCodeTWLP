<?php
	$fonts="Consolas";
	$bgcolor="#009688";
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
		em{ background: #ff6464; padding: 8px; font-size: 18px;    text-shadow: 1px 1px 4px black;}

		.headeroption h2, .footeroption h2 {
		    margin: 0;
		    text-shadow: 2px 2px 5px black;
		    font-size: 30px;
		    background-color: #009688;
		    box-shadow: 1px 2px 17px 11px #80CBC4;
		}
		.maincontent{min-height: 400px;padding: 40px; background: #333333; border: 5px solid #1a635f;color: #fff;}
		p {margin: 0} 
		.para{height: 250px; width: 650px;background: #009688;border: 1px solid #999;padding: 20px;margin-top:10px; position: relative;}
		.inside{position: absolute; height: 100px; width: 100px; background: #000000; border:1px solid #999 ; padding: 5px; border-radius: 50%;}
		button {
		    background: #2196F3;
		    padding: 5px;
		    border-radius: 5px;
		    font-weight: bold;
		    margin-top: 10px;
		    margin-bottom: 5px;
		    box-shadow: 3px 3px 6px 1px #191a1b;
		}
		.text{
			margin: 0;
			border: 1px solid #fff;
			padding: 5px;
			
		}
		.bg{background: slategrey; color: #F4D403;}	

	</style>
	
	<script src="js/Jquery.js"></script> 
	
	
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "JQuery Fundamentals";?></h2>
			
		</section>