<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Access Modifiers</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php 

//public
//private
//protected


class UserData{
	public $user;
	public $userId; 
	protected $age = "25";    // public, private, protected  //
	

	public function __construct($userName, $userId){
		$this->user   = $userName;
		$this->userId = $userId;
 		
	} 


	public function display(){
		echo "User Name is {$this->user} and user id is {$this->userId}";
		echo "<br/>";
		echo $this->age. " Inside Class";
	}

}

class Admin extends UserData{
	public $level = "Administrator";
	public function display(){
		echo "User Name is {$this->user} and user id is {$this->userId} and user level is {$this->level} ";
		echo "<br/>";
		echo $this->age. " In the sub Class";
	}
 
}

$user = "Author"; 
$id   = "25";
$ur   = new UserData($user, $id);
$ur->display();
echo "<br/>";

$admin = new Admin ("Admin", "01");
$admin->display();

echo "<br/>";
echo $ur->age;
 
?>	

		 
<?php include"inc/footer.php";?>

		