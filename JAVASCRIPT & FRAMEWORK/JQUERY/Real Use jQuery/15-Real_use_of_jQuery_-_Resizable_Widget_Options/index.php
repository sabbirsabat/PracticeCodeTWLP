<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: Resizable Widget Options</strong> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
<div class="para">

<style>
.sub {
    background: #4CAF50;
    padding: 8px;
    font-size: 20px;
    text-shadow: 1px 1px 2px black; 
}
.boxone{height: 150px;width: 150px;text-align: center;padding: 10px;color: #fff;}
.ui-resizable-helper{border: 2px dotted #fff;}
.outeroption{border: 2px solid #fff; width: 500px; height: 500px;padding: 5px;}
</style>
 
<script>
$(document).ready(function () {
	$("#boxone").resizable({
		minHeight:150,
		minWidth:150,
		maxHeight:300,
		maxWidth:300
	}); 
});
	
</script> 



<div class="outeroption" id="outeroption">
	<div class="boxone" id="boxone" style="background: #dc3535;">
		WIDGET ONE
	</div>
</div>



</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		