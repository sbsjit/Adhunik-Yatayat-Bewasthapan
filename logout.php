<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		session_unset();
	}
	header("location:index.php");
 ?>