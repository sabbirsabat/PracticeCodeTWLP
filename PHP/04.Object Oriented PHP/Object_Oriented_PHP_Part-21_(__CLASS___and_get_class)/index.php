<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: __CLASS__and get _class()</strong>
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

class PhpChild extends Php{

	public function cms(){
 			echo "Child Class Constant and class name->".__CLASS__."<br/>";
 			echo "Child Class Function and class name->".get_class($this)."<br/>";
 			
 		}
 
 	public function ourMethod(){
 		parent::framework();
 	}	
}

$php = new PhpChild();
$php->framework();
echo "<hr/>";
$php->cms();
echo "<hr/>";
$php->ourMethod();


?>
		 
<?php include"inc/footer.php";?>

		  