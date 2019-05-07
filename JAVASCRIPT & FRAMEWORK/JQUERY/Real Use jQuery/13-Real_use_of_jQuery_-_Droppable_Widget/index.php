<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: Droppable Widget</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
<div class="para">

<style>
.box{background: #eee;border: 2px solid #666; display: inline-table;font-size: 18px;padding: 5px;width:250px;color: #000000;}	
li{font-size: 18px;}
</style>
 
<script>
$(document).ready(function () {
	$("#techlist li").draggable({ 
		helper:'clone'
		revert:'invalid'
	});  

	$("#phpFramework").droppable({
		accept:'li[data-value="php"]',
		drop:function(event, ui){
			$("#php").append(ui.draggable);
		}
	});

	$("#javaFramework").droppable({
		accept:'li[data-value="java"]',
		drop:function(event, ui){
			$("#java").append(ui.draggable);
		}
	});
});
	
</script>

<div class="box">
	PHP & JAVA Framework<hr/>
	<ul id="techlist">
		<li data-value="php">Codeigniter</li>
		<li data-value="php">CakePHP</li>
		<li data-value="php">Kohana</li>
		<li data-value="java">Hbernate</li>
		<li data-value="java">Spring</li>
		<li data-value="java">Struts 2</li>
	</ul>
</div>

<div class="box" id="phpFramework">
	PHP Framework<hr/>
	<ul id="php"></ul>
</div>


<div class="box" id="javaFramework">
	JAVA Framework<hr/>
	<ul id="java"></ul>
</div>

	 
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		