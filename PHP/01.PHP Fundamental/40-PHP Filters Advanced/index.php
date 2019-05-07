<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Advanced Filters
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php

//more practice for - www.hashbangcode.com/examples/filter_url_validate/ 

/*
		$intnum="300";
		$min="1";
		$max="200";
		if (filter_var($intnum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max)))) {
			echo "It is valid range";
		}else{
			echo"It is not valid range";
		}
*/
		echo "<br/>";

		$url="http://www.trainingwithliveproject.com/index.html?q=123";
		if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
			echo "This Url is Valid";
		}else{
			echo "it has not query string";
		}

		?>
		 
		
	</section>
	<?php include"footer.php";?>

		