<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 JQuery Get Started
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
		
<script>

	
	
	$(document).ready(function(){
		$("button").mouseleave(function(){
          $("#para").hide();  //click | dblclick | mouseenter | mouseleave
	    });
	});
	


</script>


<p id="para">Training with live project</p>	
<button>Hide</button>
		
		
	</section>
	<?php include"footer.php";?>

		