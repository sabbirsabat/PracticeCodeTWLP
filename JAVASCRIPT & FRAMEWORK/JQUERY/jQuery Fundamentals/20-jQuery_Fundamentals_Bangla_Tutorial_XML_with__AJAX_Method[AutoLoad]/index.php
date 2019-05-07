<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : XML with jQuery AJAX Method (AutoLoad)</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
		
<script>  

$(document).ready(function(){ 
	idbBISEW();
	autoLoad();

});

function idbBISEW(){
	$.ajax({
		url:"idbbiswa.xml",
		dataType:"xml",
		success: function(data){
			$("ul").children().remove();
			$(data).find("employee").each(function(){
				var alldata='<li>Name: '+$(this).find("name").text()+'</li><li>skill: '+$(this).find("skill").text()+'</li><li>company: '+$(this).find("company").text()+'</li>';
				    $("ul").append(alldata);
			});
		},
		error: function(){
			$("ul").children().remove();
			$("ul").append("<li> There is no error.... </li>");
		}
	});
}
function autoLoad(){
	setTimeout(function(){
			idbBISEW();
			autoLoad();
	},100);
}

</script>

<div class="para">
	<ul></ul>
 
</div>
	
	</section> 
	
	<?php include"footer.php";?>   
		