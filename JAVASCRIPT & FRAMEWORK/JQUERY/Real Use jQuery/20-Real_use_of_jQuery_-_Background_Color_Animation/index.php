<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: Background Color Animation</strong> 
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
* Author Style Start Here
***************************************/
.mydiv{width: 600px;margin: 0 auto;border: 1px solid #fff; padding: 5px 10px; font-size: 15px;text-align: justify;}

</style>
 
<script>

$(document).ready(function () {
	var colorHandle = false;
     $("#showAnimate").click(function(){
     	var ele=$("#makeAnimate");
     	if (colorHandle) {
     		ele.animate({
     			'font-size':'15',
     			'background-color':'red',
     			'color':'#4CAF50',
     			'border-color':'#E6C35B',
     			'border-width':'2'
     		});
     	} else {
     		ele.animate({
     			'font-size':'20',
     			'background-color':'#009688',
     			'color':'#FF0000',
     			'border-color':'#4CAF50',
     			'border-width':'5',
     			'border-radius':'15'
     		});
     	}
     	colorHandle =!colorHandle;
     })
});
	


</script> 

<button id="showAnimate">Animate</button>

<div class="mydiv" id="makeAnimate">
	I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.
</div>


</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		