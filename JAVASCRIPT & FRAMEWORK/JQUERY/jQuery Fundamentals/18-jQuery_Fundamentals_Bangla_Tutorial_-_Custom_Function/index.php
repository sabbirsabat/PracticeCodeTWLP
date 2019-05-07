<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Custom Function</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
		
<script>  

$(document).ready(function(){ 
	$("#submitbtn").click(function(e){
		var isValid=true;
		$("input[type='text']#required").each(function(){
			if (($(this).val())=='') {
			isValid = false;
				$(this).css({
					"border":"1px solid red",
					"background":"#ffcece"
				});
			} else {
				$(this).css({
					"border":"",
					"background":"",
				})

			}
		});
		if (isValid==false) {
			e.preventDefault();

		} else {
			clear();
			document.getElementById('state').innerHTML="Thanks for submitting....";
			return false;
		}

	});
	
});

 function clear(){
 	$("#myfrom :input").each(function(){
 		$(this).val("");
 	});
 }

</script>




<div class="para">
	<form id="myfrom">
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type="text" id="required"/></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text"/></td>
			</tr>
			<tr>
				<td>Email Adress:</td>
				<td><input type="text" id="required"/></td>
			</tr>
			<tr>
				<td>Website:</td>
				<td><input type="text"/></td>
			</tr>
			<tr>
				<td></td>
				<td><button id="submitbtn">Submit</button></td>
			</tr>
		</table>
		<div id="state"></div>
	</form>
 
</div>
	
	</section> 
	
	<?php include"footer.php";?>   
		