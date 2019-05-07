<?php include"header.php";?>
	<section class="maincontent">
		<hr/>
			 <em>Subject: From Validation</em> 
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/> 
			
<div class="para">
	<form id="myform" action="msg.php" method="post"> 
		<table>

			<tr>
				<td>Username:</td>
				<td><input type="text" id="username" required="1"/></td>
				<td><span class="error_form" id="username_error_msg"></span></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" id="password" required="1"/></td>
				<td><span class="error_form" id="password_error_msg"></span></td>
			</tr>
			<tr>
				<td>Password Again:</td>
				<td><input type="text" id="password_again" required="1"/></td>
				<td><span class="error_form" id="password_again_error_msg"></span></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" id="email" required="1"/></td>
				<td><span class="error_form" id="email_error_msg"></span></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"/></td>
				<td></td>
			</tr>

		</table>
	</form>
	
</div>
	
	</section> 

	<?php include"footer.php";?>   
		