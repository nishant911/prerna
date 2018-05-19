<?php
	session_start();
	
	unset($_SESSION['center_code']);
	header("Location:center_login.php");

?>