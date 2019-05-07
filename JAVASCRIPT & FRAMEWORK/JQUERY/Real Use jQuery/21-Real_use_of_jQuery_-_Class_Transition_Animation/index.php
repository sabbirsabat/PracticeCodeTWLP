<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: Class Transition Animation</strong> 
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
.liveDiv{background: green;color: #000; font-size: 20px;border: 4px solid red;padding: 5px;width: 500px;}

</style>
 
<script>

$(document).ready(function () {
	var classHandle = true;
     $("#showAnimate").click(function(){
            if (classHandle) {
                $("#makeAnimate").addClass("liveDiv",2000,'swing', function(){
                   alert("Animation completed...");
                });
            } else {
                 $("#makeAnimate").removeClass("liveDiv",2000);
            }
            classHandle=!classHandle;
     });
});
	


</script> 

<button id="showAnimate">Animate</button>

<div class="mydiv" id="makeAnimate">
	I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.I am Sabbir Sabat, PHP & JavaScript Developer.
</div>


</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		