<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: Resizable Widget Event</strong> 
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
.tblone{}
.boxone{height: 100px;width: 150px;text-align:center;padding: 10px;color: #fff;}
.ui-resizable-helper{border: 2px dotted #fff;}
.outeroption{border: 2px solid #fff; width: 500px; height: 500px;padding: 5px;}
</style>
 
<script>
$(document).ready(function () {
	$("#boxone").resizable({
		start: function(event, ui){
		 $("#startDim").html(liveDim(event, ui));

		},	
		resize: function(event, ui){
		 $("#resizingDim").html(liveDim(event, ui));

		},
		stop: function(event, ui){
		 $("#stopDim").html(liveDim(event, ui));

		}
	
	}); 
	function liveDim(event, ui){
			var ele ="Height: "+ui.size.height+"<br/>";
		     	ele +="Width: "+ui.size.width;
		     	return ele;
		}
});
	
</script> 


<table border="1" style="border-collapse:collapse;" cellpadding="5px">
	<tr>
		<td>Start:</td>
		<td><div id="startDim"></div></td>
	</tr>
	<tr>
		<td>Resizing:</td>
		<td><div id="resizingDim"></div></td>
	</tr>
	<tr>
		<td>Stop:</td>
		<td><div id="stopDim"></div></td>
	</tr>

</table>

<br/>

<div class="boxone" id="boxone" style="background: #dc3535;">
	WIDGET ONE
</div>

</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		