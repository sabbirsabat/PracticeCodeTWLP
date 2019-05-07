<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Late_Static_Binding_in_PHP</strong>
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

class phpChild extends Php{
	public static function getClass(){
 			return __CLASS__;

 		}
}

$php = new Php();
$php->framework();  

$childphp = new phpChild();
$childphp->framework();


?>
		 
<?php include"inc/footer.php";?>

		  