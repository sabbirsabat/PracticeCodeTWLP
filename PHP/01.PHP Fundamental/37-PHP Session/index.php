<?php
session_start(); 
include"header.php";
?>
	<section class="maincontent">
		<hr/>
			PHP Session
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 

		$_SESSION['user']     =' sabbir';
		$_SESSION['password'] =' 123';

		echo "Username is".$_SESSION['user']."<br/>";
		echo "Password is".$_SESSION['password'];
		session_destroy();
		
		
		 ?>

		 
		
	</section>
	<?php include"footer.php";?>

		