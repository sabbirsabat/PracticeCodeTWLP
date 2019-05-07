<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: MySQLi- Basic Prepared Statements</strong> 
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




$sql = "select name, skill from tbl_user order by id";
$stmt = $db->prepare($sql);
$stmt->execute(); 
$stmt->bind_result($name, $skill);
while ($stmt->fetch()) {
	echo "$skill<br/>";
}




?>
		 
<?php include"inc/footer.php";?>

	  