<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: MySQLi- Prepared Statement with Variables</strong> 
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

if (mysqli_connect_errno()){
	echo "Connection fails...";
	exit(); 
} else {
	echo "Connection successfull....";
}


$sql = "insert into tbl_user(name, email, skill) values(?,?,?)";

$stmt = $db->prepare($sql);
$stmt->bind_param("sss",$name, $mail, $skill);

$name = "Ariful Islam";
$mail = "ariful@gmail.com";
$skill = "Blogging";
$stmt->execute();
$stmt->close();
$db->close();


?>
		 
<?php include"inc/footer.php";?>

	  