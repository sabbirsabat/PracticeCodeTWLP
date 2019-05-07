<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Constructor</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Started here--->	

<?php

class Person{  
	public $name;
	public $age;
    
    public function __construct($name, $age){ 
    	$this->name = $name;
    	$this->age = $age;
    }

    public function personDetails(){
    	echo "Person Name is {$this->name} and Person age is {$this->age}";

    }

}

$personOne = new Person("Akbor Hossain","28");
$personOne->personDetails();


?>	



		 
<?php include"inc/footer.php";?>

		