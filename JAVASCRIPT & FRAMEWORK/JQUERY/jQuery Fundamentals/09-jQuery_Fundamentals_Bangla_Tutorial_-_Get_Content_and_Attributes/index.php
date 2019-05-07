<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Get Content & Attributes.</em> 
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
		alert("The Text is: "+$("#line2").text());

	});

	$("#source").click(function(){
		alert("The Text is: "+$("#line").html());

	});

	$("#testval").click(function(){
		alert("The name is: "+$("#name").val());

	});
 
});

	

</script>

<button id="show">Show Text</button>
<button id="source">Show Html</button>
<button id="testval">Show Value</button>


<div class="para">
	<div>
		Name:<input type="text" id="name" value="Sabbir Sabat"/>
	</div>
  <p id="line">Training with  live <strong>project</strong></p>
  <p id="line2">We are learning jQuery</p>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		