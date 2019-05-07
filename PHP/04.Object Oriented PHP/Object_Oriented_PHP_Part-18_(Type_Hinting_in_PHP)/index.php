<?php 
include"inc/header.php";
?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Type Hinting in PHP</strong>
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



new Java(new Php);

 


?>

		 
<?php include"inc/footer.php";?>

		  