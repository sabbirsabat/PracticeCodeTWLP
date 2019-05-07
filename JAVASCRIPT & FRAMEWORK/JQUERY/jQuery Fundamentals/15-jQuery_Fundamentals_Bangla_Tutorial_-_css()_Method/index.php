<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : CSS ()Method</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
		
<?php

$bg = "background-color";
$bgvalue ="#666";

$clr="color";
$clrvalue="#000";

$pdd="padding";
$pddvalue="30px";

$wd="width";
$wdwidth="200px";

$bdr="border";
$bdrvalue="3px solid #fff";

$fntwt="font-weight";
$fntwtvalue="bold";


?>	
		
<script>  

$(document).ready(function(){ 
	$("#style").click(function(){
	  $("p").css({
	  	"<?php echo $bg;?>": "<?php echo $bgvalue ?>",
	  	"<?php echo $clr ?>":"<?php echo $clrvalue ?>",
	  	"<?php echo $wd ?>":"<?php echo $wdwidth ?>",
	  	"<?php echo $pdd ?>":"<?php echo $pddvalue ?>",
	  	"<?php echo $bdr ?>":"<?php echo $bdrvalue ?>",
	  	"<?php echo $fntwt ?>":"<?php echo $fntwtvalue ?>",

	  });
	});
 
}); 

</script>

<button id="style">Add CSS</button>





<div class="para">
 <!--  <div class="inside"></div> -->
   <p>We are learming JQuery</p>
</div>

	
	</section> 
	
	<?php include"footer.php";?>
		