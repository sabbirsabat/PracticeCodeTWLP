<?php 
include"inc/header.php";
?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Auto Loading Classes</strong>
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


	$ruby = new Ruby;
	$java = new Java;
	$php  = new php;

?>

		 
<?php include"inc/footer.php";?>

		  