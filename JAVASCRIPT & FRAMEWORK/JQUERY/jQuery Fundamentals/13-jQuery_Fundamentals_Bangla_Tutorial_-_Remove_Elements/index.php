<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Remove Elements</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
		
	
		
<script> 

$(document).ready(function(){
	$("#remove").click(function(){
	  $(".para").remove();
	});

	$("#empty").click(function(){
	  $(".para").empty();
	});
});

</script>

<button id="remove">Remove</button>
<button id="empty">Empty</button>


<div class="para">
   <div class="inside"></div>
   <p style="float: right;">We are learming JQuery</p>
</div>

	
	</section> 
	
	<?php include"footer.php";?>
		