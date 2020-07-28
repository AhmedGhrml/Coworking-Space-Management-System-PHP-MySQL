<?php
	// tous d'abord il faut démarrer le système de sessions
    session_start();
    
	if ($_POST) {
		require_once 'connexion.php'; 
		extract($_POST);
		if($type_user=="admin"){
			$sql="SELECT * FROM admins WHERE login_admin='$user_name' AND pwd_admin='$password'";
		}
		else{
			$sql="SELECT * FROM users WHERE login_user='$user_name' AND pwd_user='$password'";
		}

		$resultat=mysqli_query($bdd,$sql);
		if($resultat){
			if(mysqli_num_rows($resultat)==0){
				echo 'Utilisateur ou mot de passe incorrecte !!';
			}
			else if($type_user=="admin"){
				$row=mysqli_fetch_assoc($resultat);
				$_SESSION['id_admin']=$row['id_admin'];
				$_SESSION['login_admin']=$row['login_admin'];
				header('location:admin_page.php');
			}
			else{
				$row=mysqli_fetch_assoc($resultat);
				$_SESSION['id_user']=$row['id_user'];
				$_SESSION['login_user']=$row['login_user'];
				header('location:user_page.php');
			}
		}
		mysqli_free_result($resultat);
		mysqli_close($bdd);
	}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
       page login
    </title>
</head>
<body>
	<form action='login.php' method='POST'>
		<label>Nom d'utilisateur :</label>
		<input type="text" name="user_name" placeholder="Nom d'utilisateur " /><br />

		<label>Mot de passe :</label>
		<input type="text" name="password" placeholder="Mot de passe " /><br />

		<label>Type d'utilisateur :</label>
		<select name="type_user">
			<option value="admin">Administrateur</option>
			<option value="user" selected>Utilisateur</option>
		</select><br />
		<input type="submit" value="Se connecter" >
	</form>
</body>

</html>