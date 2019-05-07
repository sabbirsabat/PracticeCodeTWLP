<?php 
include"inc/header.php";
include"functions.php";
?>


<section class="maincontent">
		<hr/>
			<strong>OOP PHP: Work With Method & Object</strong>
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");
 
				 ?>
			</span>
		<hr/> 

<!--Author Code Started here--->	




<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first Number:</td>
			<td><input type="number" name="num1"/></td>
		</tr>

		<tr>
			<td>Enter the first Number:</td>
			<td><input type="number" name="num2"/></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="calculate"/></td>
		</tr>
	</table>
</form>

<?php
if (isset($_POST['calculation'])) {
	$numOne = $_POST['num1'];
	$numTwo = $_POST['num2'];

if (empty($numOne) or empty($numTwo)) {
		echo "<span style='color:#E25A38'>Field must not be empty</span><br>";
	}else{
		echo "First Number is: ".$numOne.", Second Number is ".$numTwo."<br/>";
	$cal = new Calculation;
	$cal->add($numOne,$numTwo);
	$cal->sub($numOne,$numTwo);
	$cal->mul($numOne,$numTwo);
	$cal->div($numOne,$numTwo);

	}
} 

?>


		 
<?php include"inc/footer.php";?>

		