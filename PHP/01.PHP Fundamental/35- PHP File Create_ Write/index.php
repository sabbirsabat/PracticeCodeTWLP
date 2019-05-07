<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			PHP File Create/ Write
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 

		$createfile = fopen("new.txt", "w") or die("File not found !!");
		$one="Akbor Hosain";  
		fwrite($createfile, $one); 
        fclose($createfile);
   

		 ?>
		
		
	</section>
	<?php include"footer.php";?>

		