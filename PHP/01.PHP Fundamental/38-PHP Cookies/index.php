<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Cookies
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 
			/*if (!isset($_COOKIE['visited'])) {
				setcookie("visited", "1", time()+86400,"/") or die ("Could not set Cookies!");
		        echo "This is your first visit in this website.";
                }else{
                	echo "You our old visitor";
                }
                */
                echo "Cookies deleteted";
		
		 ?>

		 
		
	</section>
	<?php include"footer.php";?>

		