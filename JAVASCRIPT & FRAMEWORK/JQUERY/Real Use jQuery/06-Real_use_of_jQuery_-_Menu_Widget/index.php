<?php include"inc/header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: jQuery Menu Widget</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			<!--  //Downloas jQuery UI -  https://jqueryui.com --->
<div class="para">

<script>
	$(document).ready(function(){
		$("#menu").menu();
		
	});

</script>



<div class="menustyle">
<ul id="menu">
	<li>Website Design
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>Bootstrap</li>
		</ul>
		
	</li>
	<li>Website Development
		<ul>
			<li>PHP</li>
			<li>JAVA
				<ul>
					<li>JSP</li>
					<li>JSF</li>
					<li>Spring</li>
				</ul>
			</li>
			<li>Python</li>
		</ul>
		
	</li>
	<li>App Development
		<ul>
			<li>Tab</li>
			<li>Mobile
				<ul>
					<li>Andorid</li>
					<li>Windows</li>
					<li>IOS</li>
				</ul>
			</li>
			<li>I pad</li>
		</ul>
		
	</li>
	<li class="ui-state-disabled">SEO</li>  <!---Example for Disable --->
	<li>Blogging</li>

	
</ul>
</div>


	
</div>
	
	</section> 

	<?php include"inc/footer.php";?>   
		