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
			<h4><?php echo "Subject - PHP Arrays- 01.Indexed | 02.Assesiative | 03.Multi-Dymentional";?></h4>
			
		</section>
	<section class="maincontent">
      

 		<?php

//01.INDEXED ARRAY//
 		

 		/* Ex-01/

			 		$x=array(5,3,9,10,15);
			 		echo $x[4]  ;
 		
 		*/

 		/* Ex-02/

		 		$x = array(3,5,7,9,11,15,18);
		 		     $length = count($x);

		 			for ($i=0; $i <$length ; $i++) { 
		 			echo($x)[$i];
		 			echo "<br/>";

 			*/

 //02.ASSESIATIVE ARRAY//

 			/*
		 			$ages=array("Rahim"=>"25","karim"=>"28","Mamun"=>"32");

		 			foreach ($ages as $x => $age) {
		 				echo $x."| age:".$age;
		 				echo "<br/>";

			*/

//03.MULTI-DYMENTIONAL ARRAY//

 	    /* Ex-01/

	 				$cars=array(

	 					array("BMW",15,"Nice"),
	 					array("Volvo",20,5),
	 					array("Saab",25,30)

	 				);

	 				echo $cars[2][2];
	 				
				*/

		// Ex-02		
        

                $cars=array(

 					array("BMW",15,"Nice"),
 					array("Volvo",20,5),
 					array("Saab",25,30),
 					array("Audi",21,35)

 				);

 				for ($row=0; $row <4 ; $row++) { 
 					echo "<p> Row Number $row </p>";
 					echo "<ul>";
 					for ($col=0; $col <3 ; $col++) { 
 						echo "<li>" .$cars[$row][$col]. "</li>";
 					}
 					echo "</ul>";

 				}
 				



	    ?>
			

		
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>