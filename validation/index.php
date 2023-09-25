<?php

	if (isset($_GET['id']) and isset($_GET['id_post'])) {
		$id = $_GET['id'];
		$id_post = $_GET['id_post'];
	}
	else {
		echo "
			<script language='javascript'>
				javascript:alert('Lien erroner');
				javascript:window.location='/BIOLINK/';
			</script>
			";
	}

	$link_bd = $_SERVER['DOCUMENT_ROOT'] . "/SauvegardeDB/dbb.php";
	$nom_de_la_base ="BioLink";
	include($link_bd);


	$recup = $db->query("SELECT * FROM member WHERE id_user = '$id'");
	$recup = $recup->fetch();
	$etat = $recup['etat'];

	if ($etat != "unactive") {
		echo "
			<script language='javascript'>
				javascript:alert('Lien Expirer');
				javascript:window.location='/BIOLINK/';
			</script>
			";
	}

	if (isset($_REQUEST['submit'])) {
		if ($_REQUEST['password1'] === $_REQUEST['password2']) {
			$mdp = hash('SHA256', $_REQUEST['password1']);
			$etat = "actif";

			$query_update = "UPDATE `member` SET mdp = :mdp, etat = :etat WHERE id_user = :id";
			$stmt = $db->prepare($query_update);

			$stmt->bindParam(':mdp', $mdp);
			$stmt->bindParam(':etat', $etat);
			$stmt->bindParam(':id', $id);

			$stmt->execute();
			echo "
				<script language='javascript'>
					javascript:alert('Good');
					javascript:window.location='/BIOLINK/ExostFlash/?page=account&id_post=".$id_post."';
				</script>
				";
		}
		else {
			echo "
				<script language='javascript'>
					javascript:alert('Mdp Inccorect');
				</script>
				";
			}
	}

?>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Validation - BioLink</title>
	<link rel="icon" href="/BIOLINK/IMG/LOGO/biolink.png"/>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  	<div id="connexion" class="container">
  		<form method="post">
  			<p>BioLink</p>
  			<label>
  				<input id="pass-1" type="password" name="password1" placeholder="Mot de passe" required>
  			</label>
  			<br>
  			<label>
  				<input id="pass-2" type="password" name="password2" placeholder="Mot de passe" required>
  				<div class="password-icon">
  					<i id="con-eye" data-feather="eye"></i>
  					<i id="con-eye-off" data-feather="eye-off"></i>
  				</div>
  			</label>
  			<br>
  			<input type="submit" name="submit" value="Validation"><br>
  		</form>

  		<style type="text/css">
  			.img-drop4 {
  				height: 90px;
  				width: 90px;
  				padding-top: 15px;
  				padding-left: 15px;
  			}
  		</style>

  		<div class="drop drop-1"></div>
  		<div class="drop drop-2"></div>
  		<div class="drop drop-3"></div>
  		<div class="drop drop-4">
  			<a href="/">
  				<img class="img-drop4" src="/BIOLINK/IMG/LOGO/biolink.png">
  			</a>
  		</div>
  		<div class="drop drop-5"></div>
  	</div>

</body>

<script src="https://unpkg.com/feather-icons"></script>
<script>
	feather.replace();
</script>
<script type="text/javascript">
	const eye = document.querySelector("#con-eye");
	const eyeoff = document.querySelector("#con-eye-off");
	const passwordField = document.querySelector("#pass-1");
	const passwordFields = document.querySelector("#pass-2");
	eye.addEventListener("click", () => {
		eye.style.display = "none";
		eyeoff.style.display = "block";
		passwordField.type = "text";
		passwordFields.type = "text";
	});

	eyeoff.addEventListener("click", () => {
		eyeoff.style.display = "none";
		eye.style.display = "block";
		passwordField.type = "password";
		passwordFields.type = "password";
	});
</script>
</html>