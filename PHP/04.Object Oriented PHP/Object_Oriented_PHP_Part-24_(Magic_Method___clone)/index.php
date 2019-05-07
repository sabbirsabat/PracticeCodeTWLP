<?php include"inc/header.php";?>

<section class="maincontent">
		<hr/>
			<strong>OOP PHP: PHP Magic Method __Clone</strong> 
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
 

$java = new Language(); 
$java->setCat("OOP");
$java->setFramework("Spring");

$php = Clone $java;
$php->setFramework("Codeigniter"); 
  
echo $java->getCat()."<br/>";
echo $java->getFramework()."<br/>";

echo $php->getCat()."<br/>";
echo $php->getFramework();



?>
		 
<?php include"inc/footer.php";?>

		  