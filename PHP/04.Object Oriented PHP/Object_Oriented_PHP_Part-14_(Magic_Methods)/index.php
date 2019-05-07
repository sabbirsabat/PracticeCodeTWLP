<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Magic Methods</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php 

//Magic Method

/*

__get($property)
__set($property, $value)
__call($method, $arg_array)

*/


class Student{

	public $name;
	public function describe(){
		echo "I am a student.<br/>";
	}

	public function __get($pm){
		echo "$pm does not exist.<br/>";
	}
	public function __set($pm, $value){
		echo "We Set $pm->$value.<br/>";
	}  

	public function __call($pm, $value){
		echo 'There is no <b>'.$pm.'</b> method and Argument: '.implode(', ', $value);
	}

}

$st = new Student();
$st->describe();
$st->Hasan;
$st->age = 15;

$st->notExistMethod('2','8','5');




?>

		 
<?php include"inc/footer.php";?>

		  