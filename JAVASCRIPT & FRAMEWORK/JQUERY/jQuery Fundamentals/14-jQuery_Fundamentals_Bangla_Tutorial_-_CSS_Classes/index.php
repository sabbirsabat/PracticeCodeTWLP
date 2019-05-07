<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : CSS Classes</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
		
<?php
function bg(){
	echo "bg";
}

function text(){
	echo "text";
}

?>	
		
<script>  

$(document).ready(function(){
	$("#style").click(function(){
	  $("p").removeClass("<?php bg();?>");
	});

	$("#allst").click(function(){
	  $("p").removeClass("<?php text();?>");
	});

	$("#bg").click(function(){
	  $("p").toggleClass("<?php bg();?>");
	});
 
}); 

</script>

<button id="style">Remove Background</button>
<button id="allst">Remove All Style</button>
<button id="bg">Toggle Class</button>





<div class="para">
 <!--  <div class="inside"></div> -->
   <p class="text bg">We are learming JQuery</p>
</div>

	
	</section> 
	
	<?php include"footer.php";?>
		