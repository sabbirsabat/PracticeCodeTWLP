<?php 
include"inc/header.php";
include"student.php";
?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Class_Method_Existence</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php 


if (class_exists("Student")) {

$st = new Student();
	if (method_exists($st, 'describe')) {
$st->describe();
}else{
 echo "Method not found";
}
}else{
 echo "Class not found";
}

?>

		 
<?php include"inc/footer.php";?>

		  