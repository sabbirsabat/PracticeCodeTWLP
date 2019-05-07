<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 jQuery Animation: animation method()
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
		
<script>

	$(document).ready(function(){
	 
		$("#animation").click(function(){	
		    $(".inside").animate({
		    	left:'350px',
		    	opacity:'0.5',
		    	height:'250px',
		    	width:'250px',

		    }, 5000);	
	    });  


	});

	

</script>

<button id="animation">Start Animation</button>

<div class="para">
 <div class="inside">
 	
 </div>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		