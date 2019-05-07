<?php
class Person{
	public $Name  = "Ariful";
	public $Age   = "18";
	public $Skill = "Bloggong";

	private $Email      = "ariful@gmail.com";
	protected $password = "12345";
 
 	function iteratorInner(){
 		echo "Inside Class<br/>";
 		foreach ($this as $key => $value) {
		echo "<pre>";
		echo "$key=> $value";
		echo "</pre>";
        }
 	}
} 

?>