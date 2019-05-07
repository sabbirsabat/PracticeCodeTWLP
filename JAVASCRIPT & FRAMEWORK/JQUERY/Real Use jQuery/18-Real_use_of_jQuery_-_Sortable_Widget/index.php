<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Sortable Widget</strong> 
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
* Author Style
***************************************/
li {
    border: 2px solid #3F51B5;
    padding: 10px;
    cursor: pointer;
    margin: 3px;
    height: 15px;
    width: 300px;   
    list-style: none;
    font-weight: bold;
    font-size: 18px;   
   
}
.ui-sortable-handle{ 
	background: #3F51B5; 
	color: #ffffff;
}
.selecteditem{
	border: 1px solid #000; 
	margin: 3px;
    height: 15px;
    width: 300px;   
    list-style: none;
    font-weight: bold;
    font-size: 18px;   
    background: red;
}

</style>
 
<script>
$(document).ready(function () {
	$("#phpitems").sortable({
		placeholder:'selecteditem',
		axis:'y',
		opacity:0.5,
		items:'li[data-value="cms"]'
	});
	
});
	
</script> 
*jQuery Sortable Widget:
<ul id="phpitems">
	<li data-value="framework">Codigniter</li>
	<li data-value="framework">Laravel</li>
	<li data-value="framework">Kohona</li>
	<li data-value="framework">FuelPHP</li>
	<li data-value="framework">CakePHP</li>
	<li data-value="cms">WordPress</li>
	<li data-value="cms">Drupal</li>
	<li data-value="cms">SliverStripe</li>

	


</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		