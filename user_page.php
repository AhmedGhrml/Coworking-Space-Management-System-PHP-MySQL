<?php
	// tous d'abord il faut démarrer le système de sessions
	session_start();

	if(!isset($_SESSION['id_user'])){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
       Page utilisateur 
    </title>
</head>
<body>
	Bonjour <?php echo $_SESSION['login_user'];?>;
	vous êtes un utilisateur de ce site ..
	<br />
	Pour déconnecter, cliquez <a href="logout.php">ici</a>
</body>
</html>