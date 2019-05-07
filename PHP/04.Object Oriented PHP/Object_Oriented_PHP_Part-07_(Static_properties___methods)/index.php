<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Static Method & Properties</strong>
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
	public static $age = "30"; 

	public function __construct($userName, $userId){
		$this->user = $userName;
		$this->userId = $userId;
  

		echo "User Name is {$this->user} and user id is {$this->userId}";
	}

	public static function display(){
		echo "Full name is: ".UserData::NAME."<br/>";
		echo "Age is:".self::$age;
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
UserData::display();




?>	



		 
<?php include"inc/footer.php";?>

		