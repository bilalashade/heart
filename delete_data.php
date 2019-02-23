<?php 
	
	$username = $_GET['id'];
	$result=mysql_query("delete from users where username ='$username'");

	
		echo "<script>alert('Successfully Delete!')</script>";
		echo "<meta http-equiv='refresh' content='0;url=view.php'/>";

	?>
 
	
	