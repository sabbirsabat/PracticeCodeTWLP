<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Selectable Widget</strong> 
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
    display: inline-block;
    padding: 15px;
    border: 1px solid #9E9E9E;
    cursor: pointer;
    background: #3f51b5;
    font-weight: bold;
    border-radius: 5px;
    box-shadow: inset 1px 1px 5px 1px black;
}
.ui-selected{background:#009688;color: #fff;}
.ui-selecting{background: #4CAF50;color: #fff;}

</style>
 
<script>
$(document).ready(function () {
	$("#javaitem").selectable({
		stop:function(){
		var output="";	
			$(".ui-selected").each(function(){
				output+=$(this).text()+"<br/>";
			});
			$("#state").html(output);
		}
	});
});
	
</script> 

<ul id="javaitem">
	<li>Servlets</li>
	<li>JSP</li>
	<li>JSTL</li>
	<li>Struts 2.0</li>
	<li>Jasper Report</li>
	<li>Spring</li>	
</ul>

<br/>
You have Selected:
<div id="state"></div>

</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		