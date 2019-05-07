<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <strong class="sub">Subject: jQuery UI Effects</strong> 
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
.maindiv{
    width:300px;
    margin: 0 auto;
    text-align: center;
    margin-top: 100px;
}
#box {
    width: 150px;
    height: 150px;
    background: #FF5722;
    color: #fff;
    box-shadow: 1px 1px 4px 4px black;
    border: 2px dotted;
}

</style>
  


<script>

$(document).ready(function(){
    $("#box").click(function(){
        $("#box").effect({               //For Effect Visit  (jQuery UI) website//
            effect:"explode",
            easing:"easeInExpo",
            pieces:4,
            duration:4000
        });
    });
});
	
</script> 

<div class="maindiv">
    <div id="box">Click Here</div>
</div>

</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		