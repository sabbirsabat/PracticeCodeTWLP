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
			<h4><?php echo "PHP Superglobal GLOBALS & SERVER ";?></h4>
			
		</section>
	<section class="maincontent">
		<hr/>
		PHP Superglobal [$GLOBALS $_SERVER]
		<hr/>

		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			Username: <input type="" name="username"/>
			<input type="submit" value ="submit"/>
			
		</form>


 		<?php

 		if ($_SERVER["REQUEST_METHOD"] == "POST") {
 			$name = $_REQUEST['username'];
 			if(empty($name)){
 				echo "<span style= 'color:red'> Username field must not be empty !!</span>";
 			}else{
 				echo "<span style= 'color:green'> You have Submitted ".$name."</span>";
 			}
 		}

 		
	    ?>
	
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>