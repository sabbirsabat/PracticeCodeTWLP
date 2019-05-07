<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Object Iterator in PHP</strong>
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

$person = new Person;
foreach ($person as $key => $value) {
	echo "<pre>";
	echo "$key=> $value";
	echo "</pre>";
}
$person->iteratorInner();

?>
		 
<?php include"inc/footer.php";?>

		  