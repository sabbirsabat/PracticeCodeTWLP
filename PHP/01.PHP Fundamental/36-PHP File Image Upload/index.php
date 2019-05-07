<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			PHP File Image Uploads
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

		<?php 

		if (isset($_FILES['image'])) {
			$filename = $_FILES['image']['name'];
			$filetmp = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp,"images/" .$filename);
			echo "Image Uploads Successfully";
		}
		
		 ?>

		 <form method="POST" action="" enctype="multipart/from-data">
		 	<input type="file" name="image"/>
		 	<input type="submit" Value="Submit"/>
		 </form>
		
		
	</section>
	<?php include"footer.php";?>

		