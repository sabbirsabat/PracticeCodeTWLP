<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Destructor</strong>
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
	public $id;
    
    public function __construct($name, $age){ 
    	$this->name = $name;
    	$this->age = $age;
    }

   	public function setId($id){
   		$this->id = $id;
   	}
   	public function __destruct(){
   		if(!empty($this->id)){
   			echo "Saving Person";

   		}
   	}
}

$personOne = new Person("Akbor Hossain","28");
$personOne->setId(12);
unset($personOne);


?>	



		 
<?php include"inc/footer.php";?>

		