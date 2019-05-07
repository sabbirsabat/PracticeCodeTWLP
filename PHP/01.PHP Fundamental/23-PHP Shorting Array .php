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
			<h4><?php echo "Subject - PHP Shorting Arrays";?></h4>
			
		</section>
	<section class="maincontent">
      

 		<?php 
 //Assendingecho "<br/>";
echo "Assending Short Numaric/alfabetically for loops";
echo "<br/>";

 		$name =array("Rakib","Akbor","Badol","Mamun"); 
 		//$name =array(25,5,15,30,20);
 		/* r*/ sort($name);   // r for reverse ... exp: sort($name) //but reverse://  rsort($name);
 		      $length=count($name);
 		      for ($i=0; $i < $length ; $i++) { 
 		      	echo $name[$i];
 		      	echo "<br/>";
 		      }



////Deasending

echo "<br/>";  //line break
echo "Deasending Short Numaric/alfabetically for loops";
echo "<br/>";  //line break
//Deasending

		 $name =array(25,5,15,30,20);
		      rsort($name);
		      $length=count($name);
		      for ($i=0; $i < $length ; $i++) { 
		      	echo $name[$i];
		      	echo "<br/>";
 		      }


echo "<br/>";  //line break
echo "Deasending Short Numaric/alfabetically foreach Loops";
echo "<br/>";  //line break
/* r*/ sort($name);   //  for numaric assending ... exp: sort($name) //for Alfabetic assending://  ksort($name);

 		      $age=array("jamal"=>"20","kamal"=>"5","Aslam"=>"15");
 		    /*k*/  asort($age);
 		      foreach ($age as $key => $value) {
 		      	echo "key= ".$key." value= ".$value;
 		      	echo "<br/>";
 		      }

 				

	    ?>
			
	
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>