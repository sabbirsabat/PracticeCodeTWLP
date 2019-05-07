<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery :AJAX Post  () Method</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
		
<script>  

$(document).ready(function(){ 
	$("#myfrom").submit(function(){
		$.post("content.php", $("#myfrom").serialize(),function(data){
			$("#state").html(data);
		});
		return false;
	});
});


</script>

<div class="para">
	<div id="state"></div>
	<form id="myfrom">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>Skill</td>
				<td><input type="text" name="skill"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"/></td>
			</tr>
		</table>
	</form>

</div>
	
	</section> 
	
	<?php include"footer.php";?>   
		