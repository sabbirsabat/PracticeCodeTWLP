<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: Dialogue Message with jQuery UI</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			<!--  //Downloas jQuery UI -  https://jqueryui.com --->
<div class="para">

	<script>
		$(function () {
			$("#dialogmsg").dialog();
		});
	</script>


	<div id="dialogmsg" title="This is my message">
	It is just for test.
	</div>

	
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		