<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Error Handling With Exception
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php
		function numCheck ($num){
			if ($num !=6) {
				throw new Exception	(" please write 6 digit zip code ");		
			}
			return true;
		} 
		try{
			numCheck(6);
			echo "Yes ,You have done"; 
		}
		catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}

		?> 
		 
		 
	</section>
	<?php include"footer.php";?>

		