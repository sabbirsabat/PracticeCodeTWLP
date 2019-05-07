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
			<h4><?php echo "Subject - PHP Function";?></h4>
			
		</section>
	<section class="maincontent">
      
 			
 		

 		<?php

 		//Show for Output- Put any one Method & Cull other all & Save then Browser Reload//

        //--------------------------------------
 		//method 01
 		//-----------------------------------------

 		function school($name){
 			echo "$name is a Good School. <br/>";
 		}

         school("Monipur High School");
         school("London Hhigh School");
         school("Nanikhir High School");
         school("Rongpur  High School");

 	     //--------------------------------------
         //method 02
         //--------------------------------------
         function school($name, $year){
 			echo "$name is Started $year. <br/>";
 		}

         school("Monipur High School","1990");
         school("London Hhigh School","1982");
         school("Nanikhir High School","1978");
         school("Rongpur  High School","1956");

         //-------------------------------------
         //method 03
         //-------------------------------------


         function school($name = "my school"){
 			echo "$name is Good. <br/>";
 		}

         school("Monipur High School");
         school();
         school("London Hhigh School");
         school("Nanikhir High School");
         school("Rongpur  High School");


        //---------------------------------
        //method 04
        //--------------------------------

 		
 	    function sum($x,$y){
 			$z=$x+$y;
 			return $z;

 		}

 		echo "5+10= " .sum(5,10);
 			
	    ?>
			

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>