<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong>jQuery : Chaining.</strong> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
		
		
<script> 

$(document).ready(function(){
	$("#chain").click(function() {
		$(".para").css("background","#FF7F7F")
		.slideUp(3000)
		.slideDown(3000);
	});
		
 
});

	

</script>

<button id="chain">CLICK HERE</button>

<div class="para">
 <div class="inside">
 	</div>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		