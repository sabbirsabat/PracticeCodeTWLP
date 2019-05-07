<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP:Constractor___ Destractor</strong>
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

		echo "User Name is {$this->user} and user id is {$this->userId}";
	}

	public function __destruct(){
		unset($this->user);
		unset($this->userId);
	}

}
$user = "Mamun"; 
$id   ="25";
$ur = new UserData($user, $id);




?>	



		 
<?php include"inc/footer.php";?>

		