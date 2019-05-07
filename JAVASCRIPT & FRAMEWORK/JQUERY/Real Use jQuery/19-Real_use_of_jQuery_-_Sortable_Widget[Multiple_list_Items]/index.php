<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: Sortable Widget[Multiple List Items]</strong> 
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

.ui-sortable-handle{ 
	background: #009688; 
	color: #ffffff;
}
ul{float: left;}
li {
    border: 1px solid #795548;
    padding: 10px 20px;
    margin: 3px;
    width: 100px;
    color: #f7f7f7;
    cursor: pointer;
    list-style: none;
}

</style>
 
<script>
$(document).ready(function () {
	$("#framework, #cms").sortable({
		//connectWith:"#framework, #cms"
		connectWith:'ul[data-value="connect"]'
	});
	
});
	
</script> 

<ul id="framework" data-value="connect">
	<li>Codigniter</li>
	<li> Mambo</li>
	<li>Kohona</li>
	<li>FuelPHP</li>
	<li>Drupal</li>
	
</ul>

<ul id="cms" data-value="connect">
	<li>Joomla</li>
	<li>Laravel</li>
	<li>WordPress</li>
	<li>CakePHP</li>
	<li>SliverStripe</li>
</ul>


	


</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		