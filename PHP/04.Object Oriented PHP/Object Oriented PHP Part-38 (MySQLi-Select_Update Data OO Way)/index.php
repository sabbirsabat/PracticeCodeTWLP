<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: MySQLi- Select/Update Data in an OO Way</strong> 
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


/*

$sql = "select * from tbl_user";

$result = $db->query($sql);
while ($data = $result->fetch_object()) {
	echo "<pre>";
	echo $data->email;
	echo "</pre>";
}

*/

$sql = "update tbl_user SET email='amin@gmail.com'where id='1'";
$result = $db->query($sql);




?>
		 
<?php include"inc/footer.php";?>

	  