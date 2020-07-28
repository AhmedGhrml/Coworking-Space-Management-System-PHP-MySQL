<?php
	define("serveur","localhost");
	define("utilisateur","root");
	define("mot_de_passe",'');
	define("base","test");

	$bdd=mysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());


	// $bdd=mmysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());
?>