<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : Set Content & Attributes.</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 

<?php

	function inputname(){
		echo "Sabbir Sabat";
	};

	function department(){
		echo "<b>Accounting</b>";
	};

	function skill(){
		echo "JavaScript, jQuery, PHP";
	};

?>		
		
		
<script> 

$(document).ready(function(){
	
	$("#name").click(function(){
		$("#getname").val("<?php inputname();?>");
	});


	$("#dept").click(function(){
		$("#line1").html("<?php department();?>");			
	});


	$("#skill").click(function(){
		$("#line2").text("<?php skill();?>");
	});
 
});

</script>

<button id="name">Show Name</button>
<button id="dept">Show Department</button>
<button id="skill">Show Skill</button>


<div class="para">
	<div>
		Name:<input type="text" id="getname" value="name will ve here..."/>
	</div>
  <p id="line1"><strong>Department</strong></p>
  <p id="line2">Skill</p>
</div>
		
		
	</section>
	<?php include"footer.php";?>

		