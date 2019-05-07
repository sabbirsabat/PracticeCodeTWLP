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
			<h4><?php echo "Subject - PHP Conditional Statement";?></h4>
			
		</section>
	<section class="maincontent">
        <!--Content Start-->
		<hr/>
		if 
		            <br/>  <!--line break--->

		else

		            <br/>  <!--line break--->

		elseif
		<hr/>

		<!--Content End-->

		<?php
 //if 
		$x=10;
		if ($x > 5) {
			echo "Training With Live Project";
		}

                          echo "<br/>";  //line break
//else
		$x=10;
		if ($x > 10) {
			echo "Training With Live Project";
		}else{
			echo "Wrong";
		}
						  echo "<br/>";  //line break
//elseif
		$x=10;

		if ($x > 15) {
			echo "X is graterthan 15";
		}elseif ($x > 12){
			echo "X is graterthan 12";
		}elseif ($x > 5){
			echo "X is graterthan 5";
		}else{
			echo "Please Give a value Smaller than 10";
		}

	    ?>
			

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>