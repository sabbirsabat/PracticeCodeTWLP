<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Polymorphism</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php 

//Polymorphism


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
	}

}

class Admin extends UserData{
	public $level = "Administrator";
	public function display(){
		echo "User Name is {$this->user} and user id is {$this->userId} and user level is {$this->level} ";
	
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
if ($admin instanceof UserData) {
	echo "Inherited";
}

 
?>	

		 
<?php include"inc/footer.php";?>

		