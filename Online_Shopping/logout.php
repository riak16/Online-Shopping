<?php
	session_start();
	if(isset($_SESSION['user'])){
		unset($_SESSION['user']);
		header("location: index.php");
	}
	header("location: index.php");
?>