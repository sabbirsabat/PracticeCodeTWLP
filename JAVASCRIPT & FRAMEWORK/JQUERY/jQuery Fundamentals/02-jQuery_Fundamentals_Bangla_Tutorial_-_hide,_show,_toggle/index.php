<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 jQuery:hide(),show(),toggle()
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
		
<script>

	$(document).ready(function(){
	 
	$("#hide").click(function(){	
	    $(".para").hide();	
    });  

    $("#show").click(function(){	
	    $(".para").show();	
    }); 

    $("#toggle").click(function(){	
	    $(".para").toggle("slow");	
    });


	});

	

</script>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>

<div class="para">
	<h3>We are Learning JQuery</h3>
	<p>We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.We are Learning JQuery.</p>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		