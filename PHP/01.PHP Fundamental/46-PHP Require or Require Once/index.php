<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Require or Require Once
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 
		require "new.php";
		require_once "new.php";
 
		?>   
		 
		
		 
	</section>
	<?php include"footer.php";?>

		