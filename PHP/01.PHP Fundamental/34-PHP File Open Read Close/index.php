<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 PHP File Open Read Close
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 
         $ourfile = fopen("text.txt", "r") or die("File not found !!");
         while (!feof ($ourfile )) {
            echo fgets ($ourfile)."<br/>";
         }
        
         fclose($ourfile);
   

		 ?>
		
		
	</section>
	<?php include"footer.php";?>

		