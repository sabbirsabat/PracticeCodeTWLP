<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Inheritance</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Started here--->	

<?php

class UserData{
	public $user;
	public $userId;
	

	public function __construct($userName, $userId){
		$this->user = $userName;
		$this->userId = $userId;
 		
	}

	public function display(){
		echo "User Name is {$this->user} and user id is {$this->userId}";
	}

}

class Admin extends UserData{
	public $level;
	public function display(){
		echo "User Name is {$this->user} and user id is {$this->userId} and user level is {$this->level} ";
	}
 
}

$user = "Mamun"; 
$id   = "25";
$ur   = new UserData($user, $id);
echo "<br/>";
$ur->display();
echo "<br/>";
$user = "Admin"; 
$id   = "1";
$ad = new Admin($user, $id);
$ad->level = "Administrator";
$ad->display();



 
?>	



		 
<?php include"inc/footer.php";?>

		