<?php
$fonts="verdana";
$bgcolor="#444";
$fontcolor="#FF9800"
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Type</title>
	<style>
	     body{font-family: <?php echo $fonts;?>}
		.phpcoding{width: 900px;margin: 0 auto;background: <?php echo "#ddd";?>;}
		.headeroption, .footeroption {background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor?>;text-align: center;padding: 20px}
		.headeroption h2, .footeroption h2{margin:0}
		.maincontent{min-height: 400px;padding: 40px;}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamentals Training";?></h2>
			<h4><?php echo "Sub- PHP Form Validation";?></h4>
			
		</section>
	<section class="maincontent">
		<hr/>
		PHP Form Validation
		<hr/>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">

		<table>
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required="1"/></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td><input type="text" name="email" required="1"/></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="website" required="1"/></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name="comment" required="1" rows="5" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="female"/>Female
					<input type="radio" name="gender" value="male"/>Male
					<input type="radio" name="gender" value="other"/>Other
					
				</td>

			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"/></td>
			</tr>
				
		</table>
	</form>

		
 		<?php
 		$name = $email = $website = $comment =$gender = "";

 		if ($_SERVER ["REQUEST_METHOD"]=="POST"){
 			$name      	=  validate($_POST['name']);
 			$email 		=  validate($_POST['email']);
 			$website 	=  validate($_POST['website']);
 			$comment 	=  validate($_POST['comment']);
 			$gender 	=  validate($_POST['gender']);

	 		echo "Name:" .$name."<br/>";
	 		echo "E-mail:" .$email."<br/>";
	 		echo "Website:" .$website."<br/>";
	 		echo "Comment:" .$comment."<br/>";
	 		echo "Gender:" .$gender;

 		}
 		function validate($data){
 			$data=trim($data);
 			$data=stripcslashes($data);
 			$data=htmlspecialchars($data);
 			return $data;

 		}

	    ?>
	
	</section>
		<section class="footeroption">
			<h2><?php echo "www.trainingwithliveproject.com";?></h2>
		</section> 
   </div>
</body>
</html>