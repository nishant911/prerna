<?php
	session_start();
	
	unset($_SESSION['member_id']);
	header("Location:http:login.php");

?>