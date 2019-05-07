<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery with JSON</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
		
<script>  

$(document).ready(function(){ 
	var personsJSON = {
		"Sabbir":{
		"name":"Sabbir",
		"skill":"PHP",
		"email":"sabbirsabat@hotmail.com"
		},
		"Imran":{
		"name":"Imran Sir",
		"skill":"JAVA",
		"email":"delowerjahanimran@gmail.com"
		}
		};
		
		$("#state").html(personsJSON.Imran.name);
});


</script>

<div class="para">
	<div id="state"></div>
	


</div>
	
	</section> 
	
	<?php include"footer.php";?>   
		