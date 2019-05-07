<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>jQuery : XML with jQuery AJAX Method</em> 
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
			$("ul").append(alldata)
		}
	});
}

</script>

<div class="para">
	<ul></ul>
 
</div>
	
	</section> 
	
	<?php include"footer.php";?>   
		