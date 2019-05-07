<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery Accordian Widget</strong> 
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
.main{width: 600px;margin: 0 auto;margin-top: 50px;}
#accdion{font-size: 15px;}

</style>
  


<script>

$(document).ready(function(){
   $("#accdion").accordion({
        collapsible:true
   });
     
});
	
</script> 

<div class="main">
    <div id="accdion">
        <h3>Tab One</h3>
        <div>
            <p>This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.This is tab one .Some Content will be go here.</p>
        </div>

        <h3>Tab Two</h3>
        <div>
            <p>This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.This is tab two .Some Content will be go here.This is tab two.</p>
        </div>

        <h3>Tab Three</h3>
        <div>
            <p>This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.This is tab three .Some Content will be go here.</p>
        </div>


    </div>
</div>





</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		