<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Datepicer Widget</strong> 
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
#showDate{color: #fff;}
.ui-icon{background: #fff;}
</style>
 
<script>

$(document).ready(function () {
    $("#showDate").datepicker({
        showOn:'both',
        buttonText:'Show Date',
        dateFormat:'dd/mm/yy',
        changeMonth:true,
        changeYear:true
    });
	
});
	


</script> 

<label for="showDate">Select Date:</label>
<input type="text" id="showDate"/>

</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		