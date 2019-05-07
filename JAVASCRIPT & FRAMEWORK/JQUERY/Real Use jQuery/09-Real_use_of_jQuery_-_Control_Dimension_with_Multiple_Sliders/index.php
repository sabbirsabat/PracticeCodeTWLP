<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: Control Dimention with Multiple Slider</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
<div class="para">

<script>
$(document).ready(function(){
	$("#imgHeight, #imgWidth").slider({
			min:100,
			max:500,
			slide: controlImg
	});
	function controlImg(){
		var height = $("#imgHeight").slider('value'); 
		var width  = $("#imgWidth").slider('value'); 
		$("#liveimg").css({
			height:height,width:width
		});
		$("#state").html("Height: "+height+" pixels<br/>"+
			 "Width: "+width+" pixels<br/>");
	}
});
</script>


<div id="imgHeight"></div><br/>
<div id="imgWidth"></div><br/>

<div id="state"></div><br/>

<img id="liveimg" src="img/metamorfosis.jpg" style="height: 100px; width:100px; align-items: center;"/>

	
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		