<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Tabs Widget</strong> 
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
   $("#tabs").tabs();
});
	


</script> 


<div id="tabs">
    <ul>
        <li><a href="#one">One</a></li>
        <li><a href="#two">Two</a></li>
        <li><a href="#three">Three</a></li>
    </ul>
<div id="one">
    <h2>This is item for one tabs</h2>
    <p>This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.This is item for one tabs.</p>
</div> 

<div id="two">
    <h2>This is item for two tabs</h2>
    <p>This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.This is item for two tabs.</p>
</div>  

<div id="three">
    <h2>This is item for three tabs</h2>
    <p>This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.This is item for three tabs.</p>
</div>



</div>





</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		