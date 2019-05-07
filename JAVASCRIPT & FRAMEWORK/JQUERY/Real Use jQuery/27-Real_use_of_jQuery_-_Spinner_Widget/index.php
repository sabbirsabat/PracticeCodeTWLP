<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Spinner Widget</strong> 
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

$(document).ready(function(){
    $("#myspinner").spinner({
            step:5,
            min:-10,
            max:50
    });
   
});
	
</script> 

<div class="main">
    <input type="text" id="myspinner" value="0"/>
</div>



</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		