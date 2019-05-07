<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Set & Get Attributes.</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
	
		
<script> 

$(document).ready(function(){
	$("#show").click(function(){
		$("#live").attr({
			"href"  :"https://www.forbes.com/",
			"title" :"Forbes"
		});
	});

});

</script>

<button id="show">Change Value</button>


<div class="para">
	<p><a href="http://www.sabbirsabat.blogspot.com" title="Sabat Blog" id="live">Sabat Blog</a></p>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		