<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 jQuery Effect:Sliding
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
		
<script>

	$(document).ready(function(){
	 
		$("#slidedown").click(function(){	
		    $(".para").slideDown(3000);	
	    });  

		$("#slideup").click(function(){	
			$(".para").slideUp(3000);	
		});  

		$("#slidetoggle").mouseleave(function(){	
			$(".para").slideToggle(2000);	
		});  


	});

	

</script>

<button id="slidedown">Slide Down</button>
<button id="slideup">Slide Up</button>
<button id="slidetoggle">Slide Toggle</button>


<div class="para">
	<h3>We are Learning JQuery</h3>
	<p>We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.</p>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		