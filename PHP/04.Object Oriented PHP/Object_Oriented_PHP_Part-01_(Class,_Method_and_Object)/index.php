<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Class, Property, Method & Object</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Started here--->	

<?php

class Person {  
	public $name;
	Public $age;
    
    public function personName(){
    	echo "Person Name is:".$this->name."<br/>";
    }

    public function personAge($value){
    	echo "Person Age is:".$this->age=$value;

    }
}
$personOne = new Person;
$personOne->name="Ariful Islam";
$personOne->personName();


$personOne->personAge("18");
?>	



		 
<?php include"inc/footer.php";?>

		