<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Class Constracts</strong>
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
	const NAME = "Abdulla Al Mamun"; 

	public function __construct($userName, $userId){
		$this->user = $userName;
		$this->userId = $userId;


		echo "User Name is {$this->user} and user id is {$this->userId}";
	}

	public function display(){
		echo "Full name is: ".UserData::NAME;
	}

	public function  __destruct(){
		unset($this->user);
		unset($this->userId);
	}

}
$user = "Mamun"; 
$id   = "25";
$ur   = new UserData($user, $id);
echo "<br/>";
$ur->display()




?>	



		 
<?php include"inc/footer.php";?>

		