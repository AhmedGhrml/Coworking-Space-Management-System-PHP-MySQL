<?php
	// tous d'abord il faut démarrer le système de sessions
	session_start();
	session_destroy();

	header('location:login.php');
?>