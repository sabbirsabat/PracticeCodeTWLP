<?php include"inc/header.php";?>
<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Interface</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Start here--->	

<?php 

Interface School{
	public function mySchool();
}

Interface College{
	public function myCollege();
}


Interface Varsity{
	public function myVarsity();
}


class Teacher implements School, College, Varsity{
	public function __construct(){
		$this->mySchool();
		$this->myCollege();
		$this->myVarsity();
	}

	public function mySchool(){
		echo "I am a school teacher.<br/>";
	}

	public function myCollege(){
		echo "I am a colllege teacher.<br/>";
	}

	public function myVarsity(){
		echo "I am a varsity teacher.<br/>";
	}
}


class Student implements School, College, Varsity{
	public function __construct(){
		$this->mySchool();
		$this->myCollege();
		$this->myVarsity();
	}

	public function mySchool(){
		echo "I am a school student.<br/>";
	}

	public function myCollege(){
		echo "I am a colllege student.<br/>";
	}

	public function myVarsity(){
		echo "I am a varsity student.<br/>";
	}
}


$teacher = new Teacher();
$student = new Student();

 

?>

		 
<?php include"inc/footer.php";?>

		