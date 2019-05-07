<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Dimention</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
		
<script>  

$(document).ready(function(){ 
	$("#select").click(function(){
		var val ="";
		val +="Width is:"+$(".dimen").width()+"</br>";
		val +="Height is:"+$(".dimen").height()+"</br>";
		val +="Inner Width is:"+$(".dimen").innerWidth()+"</br>";
		val +="Inner Height is:"+$(".dimen").innerHeight()+"</br>";
		val +="Outer Width is:"+$(".dimen").outerWidth()+"</br>";
		val +="Outer Height is:"+$(".dimen").outerHeight()+"</br>";
		val +="Para Outer Width is:"+$(".dimen").outerWidth(true)+"</br>";
		val +="Para Outer Height is:"+$(".dimen").outerHeight(true);
		$("#state").html(val);
	});
 
}); 

</script>

<button id="select">Display</button>
<div id="state"></div>

<div class="para">
   <p class="dimen">We are learming jQuery</p>
</div>
	
	</section> 
	
	<?php include"footer.php";?>   
		