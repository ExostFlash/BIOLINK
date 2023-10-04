<?php

	$link_bd = NULL;

	// page

	if (isset($_GET['id_post'])) {
		$id_post_page = $_GET['id_post'];
	}

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if ($page == "blog") {
			$link_bd = $_SERVER['DOCUMENT_ROOT'] . "/SauvegardeDB/dbb.php";
			$nom_de_la_base ="BioLink";
		}
	}
	else {
		$page = "about";
	}
	// import +
	
	include($link_bd);
	include("function.php");

	session_start();

?>

<?php
	// import page !

	include("dark/header.php");
	include("dark/". $page .".php");
	include("dark/footer.php");
?>

<?php
	

	if (isset($_REQUEST['btn_contact'])) {
		$name = valid_donnees($_REQUEST['nameContact']);
		$email = valid_donnees($_REQUEST['emailContact']);
		$message = valid_donnees($_REQUEST['messageContact']);


		$dest = "no-reply@exostflash.ovh";
		$objet = "Contact de ". $name ." via le site";
		$contenu = "<br />Monsieur ". $name ." vous contacte via le site <a href='https://exostflash.ovh/BIOLINK/ExostFlash_PRO/'>BioLink ExostFlash</a>";
		$contenu .= "<br /><br />Message : ". $message;
		$contenu .= "<br /><br />Mail de ". $name ." : <a href='mailto:".$email."'>".$email."</a>";
		$contenu .= "<br />Date du message : ".date("d/m/Y");
		sendmail($db, $objet, $contenu, $dest);

		$dest = $email;
		$objet = "E-mail from ". $name ." well send";
		$contenu = "<br />Sir ". $name ." you have just contacted <b>Amaury MAIZY</b> through the website <a href='https://exostflash.ovh/BIOLINK/ExostFlash_PRO/'>BioLink ExostFlash_PRO</a>";
		$contenu .= "<br /><br />Message : ". $message;
		$contenu .= "<br /><br />Post date : ".date("d/m/Y");
		sendmail($db, $objet, $contenu, $dest);
	}

	if (isset($_REQUEST['btn_inscription'])) {
		$pseudo = valid_donnees($_REQUEST['pseudo_inscription']);
		$fullname = explode(" ", valid_donnees($_REQUEST['fullname_inscription']));
		$nom = valid_donnees($fullname[0]);
		$prenom = valid_donnees($fullname[1]);
		$email_inscription = valid_donnees($_REQUEST['email_inscription']);

		$chaineAleatoire = genererChaineAleatoire();
		$create_datetime = date("Y-m-d H:i:s");

		$query_inscription = "INSERT into `member` (pseudo, nom, prenom, email, date_inscription) VALUES (:pseudo, :nom, :prenom, :email_inscription, :create_datetime)";
		$stmt = $db->prepare($query_inscription);

		$stmt->bindParam(':pseudo', $pseudo);
		$stmt->bindParam(':nom', $nom);
		$stmt->bindParam(':prenom', $prenom);
		$stmt->bindParam(':email_inscription', $email_inscription);
		$stmt->bindParam(':create_datetime', $create_datetime);

		if ($stmt->execute()) {
			$recup = $db->query("SELECT * FROM member WHERE email = '$email_inscription'");
			$recup = $recup->fetch();
			$id_user = $recup['id_user'];

			$link = "https://www.exostflash.ovh/BIOLINK/validation/exostflash_pro.php?member=".$chaineAleatoire."&id=".$id_user."&id_post=".$id_post_page;


			$dest = $email_inscription;
			$objet = "Registration Validation";
			$contenu = "<br />Sir ". $nom ." you have just registered via the website <a href='https://www.exostflash.ovh/BIOLINK/ExostFlash_PRO/'>BioLink ExostFlash_PRO</a>";
			$contenu .= "<br /><br />Validation link : <a href='". $link ."'>". $link ."</a>";
			$contenu .= "<br /><br />Post date : ".date("d/m/Y");
			sendmail($db, $objet, $contenu, $dest);

			echo "
				<script language='javascript'>
					javascript:alert('Check your emails! (potentially in spam too)');
					javascript:window.location='/BIOLINK/ExostFlash_PRO/';
				</script>
				";
		}
		else {
			echo "
				<script language='javascript'>
					javascript:alert('An error occured ! try again');
					javascript:window.location='/BIOLINK/ExostFlash_PRO/?page=account';
				</script>
				";
		}
	}

	if (isset($_REQUEST['btn_connexion'])) {
		$id_co = valid_donnees($_REQUEST['id_connexion']);
		$mdp = hash('SHA256', $_REQUEST['mdp_connexion']);

		$recup = $db->query("SELECT * FROM member WHERE (pseudo='$id_co' or email='$id_co')");
		$recup = $recup->fetch();

		if ($mdp === $recup['mdp']) {
			session_start();
			$_SESSION['id_user'] = $recup['id_user'];
			echo "
				<script language='javascript'>
					javascript:alert('Connect');
					javascript:window.location='/BIOLINK/ExostFlash_PRO/?page=single-post&id_post=".$id_post_page."';
				</script>
				";
		}
		else {
			echo "
				<script language='javascript'>
					javascript:alert('Password Inccorect');
					javascript:window.location='/BIOLINK/ExostFlash_PRO/?page=account&id_post=".$id_post_page."';
				</script>
				";
		}
	}

	if (isset($_REQUEST['btn_message'])) {
		$text = valid_donnees($_REQUEST['message_blog']);
		$create_datetime = date("Y-m-d H:i:s");
		
		$query_message = "INSERT into `comment_blog` (id_post, id_user, texte, create_date) VALUES (:id_post, :id_user, :texte, :create_date)";
		$stmt = $db->prepare($query_message);

		$stmt->bindParam(':id_post', $_GET['id_post']);
		$stmt->bindParam(':id_user', $_SESSION['id_user']);
		$stmt->bindParam(':texte', $text);
		$stmt->bindParam(':create_date', $create_datetime);
		if ($stmt->execute()) {
			echo "
				<script language='javascript'>
					javascript:window.location='/BIOLINK/ExostFlash_PRO/?page=single-post&id_post=".$id_post_page."';
				</script>
				";
		}
		else {
			echo "
				<script language='javascript'>
					javascript:alert('An error occured ! try again');
					javascript:window.location='/BIOLINK/ExostFlash_PRO/?page=account';
				</script>
				";
		}
	}

?>