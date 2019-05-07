<?php
	$fonts="verdana";
	$bgcolor="#444";
	$fontcolor="#FF9800";
	
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
		p {margin: 0} 
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamentals Training";?></h2>
			<h4><?php echo "Sub- PHP Date & Time";?></h4>
			
		</section>
	<section class="maincontent">
		<hr/>
			PHP Date & Time
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
		<?php 
          echo "Today is " .date("d.m.Y")."<br/>";
          echo "Today is " .date("l")."<br/>";
          echo "Default Time is " .date("h:i:sa")."<br/>";

		  date_default_timezone_set('Asia/Dhaka');
          echo "Bangladesh Time is " .date("h:i:sa")."<br/>";
          echo date_default_timezone_get()."<br/>";
          


		 ?>
		
		
	</section>
		<section class="footeroption">
			<p>&copy;<?php echo date('Y'); ?> Training With Live Project</p>
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>