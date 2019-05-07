<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Array Object</strong> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php
/* 
spl_autoload_register(function($class_name){
	include "classes/".$class_name.".php";
});
*/



$arr = array("HTML","CSS","PHP","JavaScript");
$coding = new ArrayObject($arr);
$coding->append("JAVA");
$iterator = $coding->getIterator();
while ($iterator->valid()) {
	echo $iterator->current()."<br/>";
	$iterator->next();
}


?>
		 
<?php include"inc/footer.php";?>

		  