<?php

	session_start();

	
	require('src/log.php');

	if(!empty($_POST['email']) && !empty($_POST['passwords']) && !empty($_POST['password_two'])) {

		require('src/connect.php');

		// variables
		$role = $_POST['role'];
		$email = htmlspecialchars($_POST['email']);
		$passwords = htmlspecialchars($_POST['passwords']);
		$password_two = htmlspecialchars($_POST ['password_two']);

		// password = password_two
		if($passwords != $password_two) {
			header('location: inscription.php?error=1&message=Vos mots de passe ne sont pas identiques.');
			exit();
		}

		// adresse email valide
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			header('location: inscription.php?error=1&message=Votre adresse email est invalide.');
			exit();
		}

		// email deja utilisee
		$req = $db->prepare("SELECT count(*) as numberEmail FROM user WHERE email = ?");
		$req->execute(array($email));

		while($email_verification = $req->fetch()) {

			if($email_verification ['numberEmail'] != 0) {
				header('location: inscription.php?error=1&message=Votre adresse email est déjà utilisée par un autre utilisateur.');
				exit();
			}

		}

		// hash
		$secret = sha1($email).time();
		$secret = sha1($secret).time();

		// chiffrage du mot de passe

		$passwords = "aq1".sha1($passwords."123")."25";
		
		//envoi
		$req= $db->prepare("INSERT INTO user(email, passwords, secret, role) VALUES (?,?,?)");
		$req->execute(array($email, $passwords, $secret, $role));

		header('location: inscription.php?success=1');
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarifs-Transports</title>
	<link rel="stylesheet" type="text/css" href="design/style.css">
	
</head>
<body>

	<?php include('src/header.php'); ?>
	
	<section>
		<div id="login-body">
			<h1>S'inscrire</h1>
			<p>Veuillez entrer vos informations</p>
			<?php if(isset($_GET['error'])) {
				if(isset($_GET['message'])) {
					echo'<div class ="alert error">'.htmlspecialchars($_GET['message']).'</div>';
				} 
			} else if(isset($_GET['success'])) {
				echo'<div class="alert success"> Vous êtes désormais inscrit. <a href="index.php">Connectez-vous</a>.</div>';
			}

			?>

			<form method="post" action="inscription.php">
				<input type="email" name="email" placeholder="Votre adresse email" required />
				<input type="passwords" name="passwords" placeholder="Mot de passe" required />
				<input type="passwords" name="password_two" placeholder="Retapez votre mot de passe" required /></br>
				<label id="job"><input type="radio" name="role" value="commercial" checked />Commercial</label>
				<label id="job"><input type="radio" name="role" value="controleurgestion"/>Controleur de gestion</label>
				<button type="submit">S'inscrire</button>
			</form>

	

			<p class="grey">Déjà sur inscrit ? <a href="index.php">Connectez-vous directement</a></p>
		</div>
	</section>

	<?php include('src/footer.php'); ?>
</body>
</html>