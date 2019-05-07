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
			<h4><?php echo "Subject - PHP String ";?></h4>
			
		</section>
	<section class="maincontent">
		    
			<?php
			/*string lenth start*/
			 $x = "PHP is Nice";
			 echo strlen($x);
			 /*string lenth Stop*/
			?>

			<br/>

			<?php
			/*string word count start*/
            $x="PHP is Nice";
			 echo str_word_count($x);
			 /*string word count stop*/
			 ?>

			 <br/>

			 <?php
			/*string reverse start*/
            $x="PHP is Nice";
			 echo strrev($x);
			 /*string reverse stop*/
			 ?>

			  <br/>

			 <?php
			/*string position start*/
            $x="PHP is Nice"; 
			 echo strpos($x, "Nice");
			 /*string position stop*/
			 ?>

			  <br/>

			 <?php
			/*string replace start*/
            $x="PHP is Nice";
			 echo str_replace("PHP", "JAVA", $x);
			 /*string replace  stop*/
			 ?>

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>