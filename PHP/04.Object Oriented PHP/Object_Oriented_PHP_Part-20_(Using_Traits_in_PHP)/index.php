<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Traits in PHP</strong>
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

trait Java{
	public function javaCoder(){
		return "I love JAVA<br/>";
	}
}

 
class CoderOne{
	use Java;
	public function javaCoder(){
		return "I love JAVA and PHP<br/>";
	}
}


$c1 = new CoderOne;
echo $c1->javaCoder();




?>
		 
<?php include"inc/footer.php";?>

		  