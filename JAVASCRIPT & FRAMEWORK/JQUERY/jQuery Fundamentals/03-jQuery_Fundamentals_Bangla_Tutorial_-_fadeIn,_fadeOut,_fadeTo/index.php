<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 jQuery:fadeIn(),fadeOut(),fadeToggle(),fadeTo()
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
		
<script>

	$(document).ready(function(){
	 
		$("#fadein").click(function(){	
		    $(".para").fadeIn(1000);	
	    });  

	    $("#fadeout").click(function(){	
		    $(".para").fadeOut(1000);	
	    });

	    $("#fadeto").click(function(){	
		    $(".para").fadeTo(1000, 0.3);	
	    });

	    $("#fadetoggle").click(function(){	
		    $(".para").fadeToggle(1000);	
	    });


	});

	

</script>

<button id="fadein">FadeIn</button>
<button id="fadeout">FadeOut</button>
<button id="fadeto">FadeTo</button>
<button id="fadetoggle">FadeToggle</button>


<div class="para">
	<h3>We are Learning JQuery</h3>
	<p>We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.</p>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		