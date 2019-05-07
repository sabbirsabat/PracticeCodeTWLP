<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: jQuery Tooltip Widget</em> 
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
	$(document).ready(function(){
		$("#textname").tooltip({
			content:tolltipData,
			track: true,
			show:{delay:100, duration:500, effect:'slideDown'},
			hide:{delay:100, duration:500, effect:'slideUp'}
		});	
		function tolltipData(){
			return "Data from my function...";

		}	
	});

</script>

	<label id="lblname" for="textname" title="Fullname">Name</label>
	<input type="text" id="textname" title="Your name will be here.."/>

	
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		