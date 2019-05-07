<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 PHP inclued
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 
         echo readfile("text.txt");
   

		 ?>
		
		
	</section>
	<?php include"footer.php";?>

		