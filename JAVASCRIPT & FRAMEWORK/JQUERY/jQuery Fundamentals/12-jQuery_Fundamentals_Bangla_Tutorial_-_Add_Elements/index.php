<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Add Elements</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 

<?php
    function before(){
	echo "Training With";
 }

	function after(){
	echo " Project";
 }

?>		
	
		
<script> 

$(document).ready(function(){
	
	$("#before").click(function(){
		$("p").before("<?php before();?>");
	});

	$("#after").click(function(){
		$("p").after("<?php after();?>");
	});
});

</script>

<button id="before">Add Before</button>
<button id="after">Add After</button>

<div class="para">

	<p><span style="color:red">Live</span></p>

</div>

	
	</section> 
	
	<?php include"footer.php";?>
		