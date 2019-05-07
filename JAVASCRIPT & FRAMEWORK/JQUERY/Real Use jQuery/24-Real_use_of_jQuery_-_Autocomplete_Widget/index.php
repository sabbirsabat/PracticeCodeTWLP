<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Autocomplete Widget</strong> 
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

/**************************************
* Author Style Start Here
***************************************/

</style>
 
<script>

$(document).ready(function () {
    var tech = [
        "Php",
        "Java",
        "jQuery",
        "JavaScript",
        "Perl",
        "Ruby",
        "Swing",
        "Html",
        "Css"
    ];

   $("#gettech").autocomplete({
        source:tech,
        autoFocus:true,
        minLength:2,
        delay:300
   });
});
	


</script> 

<p>Type 2 Letter..ph, ja, cs </p>
<label for="gettech">Type Tecnology Name:</label>
<input type="text" id="gettech"/>



</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		