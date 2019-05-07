<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: Increment Slider Values</em> 
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
		$("#slider").slider({
			value:100,
			min:0,
			max:500,
			step:50,
			slide:function(event,ui){
				$("#amount").val("Tk. "+ui.value);
			}
		});
		$("#amount").val("Tk. "+$("#slider").slider("value"));
		
	});

</script>

<label for="amount">Select Price:</label>
<input type="text" id="amount" readonly style="font-weight: bold;color: #fff;margin-bottom: 20px"/>
<div id="slider"></div>


	
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		