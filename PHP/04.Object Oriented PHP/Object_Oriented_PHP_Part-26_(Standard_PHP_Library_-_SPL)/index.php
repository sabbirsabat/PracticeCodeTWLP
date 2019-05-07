<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: PHP Standerd Library SPL </strong> 
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


$arr = array("HTML","CSS","PHP","JavaScript","JAVA");
$ai = new ArrayIterator($arr);
$ci = new CachingIterator($ai);

foreach ($ci as $value) {
  echo $value;
  if ($ci->hasNext()) {
  echo ", ";
  }
}


?>
		 
<?php include"inc/footer.php";?>

<!---More Iterator Please Visit Php.net/manual/en/book.spl.php -->		  