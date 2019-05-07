<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Explode( ) & Implode() Function
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 
		//explode

		$mystr = "We are Learning PHP";
		$str=explode(" ", $mystr );
		echo $str[2];  
		
		echo "<br/>";

		//implode
		
		$mystr = array("We" ,"are", "Learning", "PHP");
		echo implode(" ,", $mystr ); 
		
		

		?> 
		 
		 
	</section>
	<?php include"footer.php";?>

		