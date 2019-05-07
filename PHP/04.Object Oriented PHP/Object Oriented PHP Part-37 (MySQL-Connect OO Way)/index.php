<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: MySQL - Connect OO Way</strong> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php

$db = new mysqli("localhost","root","","userdata");

if (mysqli_connect_errno()) {
	echo "Connection fails...";
	exit();
} else {
	echo "Connection successfull....";
}


?>
		 
<?php include"inc/footer.php";?>

	  