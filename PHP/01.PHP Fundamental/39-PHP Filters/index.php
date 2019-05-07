<?php
session_start(); 
include"header.php";
setcookie('visited',"", time() -3600);
?>
	<section class="maincontent">
		<hr/>
			PHP Filters
			<span style="float: right">
				 <?php
				 date_default_timezone_set('Asia/Dhaka');
				 echo "Time ".date("h:i:sa");

				 ?>
			</span>
		<hr/>
<!--
		<table>
			<tr>
				<td>Filter Name</td>
				<td>Filter ID</td>
			</tr>

		<?php 
		foreach (filter_list() as $id=>$filter) {
			echo '<tr> <td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
		}
		 ?>
       </table>
-->

		<?php
		/*
		$str="<h2>I am learing PHP</h2>";
		$newstr=filter_var($str, FILTER_SANITIZE_STRING) ;
		echo $newstr; 
        */


			//IP,EMAIL,URL   are same method. just Write FILTER_VALIDATE_IP ,FILTER_VALIDATE_EMAIL
		// More VALIDATE please Search Google

        $url="https://www.chindabad.com";
        if (filter_var($url, FILTER_VALIDATE_URL)) {
        	echo " $url is Valid Website Address";
        }else{ 
        	echo " $url is not Valid Website Address";
        }

		?>
		 
		
	</section>
	<?php include"footer.php";?>

		