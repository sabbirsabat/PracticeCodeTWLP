<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Case Change
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 
		if (isset($_POST['text'])) {
			global $txt;
			$txt=$_POST['text'];
			echo ucwords($txt);  //strtoupper , strtolower, ucfirst , ucwords
		}
		

		?>  
		 
		 <form action="index.php" method="post">
		 	<input type="text" name="text" value="<?php global $txt; echo $txt;?>" />
		    <input type="submit" value="Submit"/>
		 </form> 
		 
	</section>
	<?php include"footer.php";?>

		