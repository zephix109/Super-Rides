<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->
<?php	
	session_start();
	$_SESSION['login'] = null;	
	header ("Location: Homepage.php");
?>