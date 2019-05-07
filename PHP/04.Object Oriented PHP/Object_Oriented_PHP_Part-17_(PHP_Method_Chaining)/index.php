<?php 
include"inc/header.php";
?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: PHP Method Chaining</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php 

spl_autoload_register(function($class_name){ 
	 include "classes/".$class_name.".php";	

});
 
 $cal = new Calculation;
 echo "Result is: ". $cal->getValue(3,5)->getResult();

?>

		 
<?php include"inc/footer.php";?>

		  