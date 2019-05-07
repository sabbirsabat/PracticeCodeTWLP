<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 jQuery : Callback Function
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>

<?php 
	function test(){
		echo "Callback Started";
	}
?>		
		
<script>

	$(document).ready(function(){
	 
		$("#start_animation").click(function(){	 
		    $(".inside").animate({
		    	left:'350px',
		    	opacity:'0.5',
		    	height:'250px',
		    	width:'250px',

		    }, 5000, function(){
		    	alert("<?php echo test(); ?>");
		    });	 
	    }); 

		$("#stop_animation").click(function(){
			$(".inside").stop();

		});

 
	});

	

</script>

<button id="start_animation">Start Animation</button>
<button id="stop_animation">Stop Animation</button>


<div class="para">
 <div class="inside">
 	
 </div>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		