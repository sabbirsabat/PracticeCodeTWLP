<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Error Handling
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php
		//  E_ERROR|E_WARNING|E_PARSE|E_NOTICE|E_ALL   // more error please search internet//

		error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE|E_ALL);
		$price=45;
		if ($price==45) {
			print "The price is $price";
		}else{
			print "The price is  not $price";
		}

		?>
		 
		
	</section>
	<?php include"footer.php";?>

		