<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: Draggable Widget Priority</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
<div class="para">

<style>

.ourDiv {
    height: 200px;
    width:  200px;
    color: #fff;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    padding: 4px;
    text-shadow: 0 0 black;
}
.outerdiv{width: 115px; height: 115px; border: 2px solid #666} 
</style>

 
<script>
$(document).ready(function(){
	$(".ourDiv").draggable();
	$(".ourDiv").mousedown(function(){
		var maxZindex = 0;
		$(this).siblings('.ourDiv').each(function(){
			var currentZindex= Number($(this).css('z-index'));
			maxZindex = currentZindex > maxZindex ? currentZindex : maxZindex; 
		});
		$(this).css('z-index', maxZindex+1);

	});
	

});
	
</script>

<div class="ourDiv" style="background: green">Green</div>
<div class="ourDiv" style="background: red">Red</div>
<div class="ourDiv" style="background: blue">Blue</div>
<div class="ourDiv" style="background: brown">Brown</div>
	 
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		