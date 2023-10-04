<?php

	// envoye e-mail

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	function sendmail($db, $objet, $contenu, $destinataire) {
		$recup = $db->query("SELECT * FROM mailer_php WHERE id = 2");
		$recup = $recup->fetch();
		$email = $recup['mail'];
		$mdp = $recup['mdp'];

		$mail = new PHPMailer(true);
		try {
			$mail->setLanguage('fr', '../PHPMailer/language/');
			$mail->SMTPDebug = 0;
			$mail->isSMTP();
			$mail->Host       = 'ssl0.ovh.net';
			$mail->SMTPAuth   = true;
			$mail->Username   = $email;
			$mail->Password   = $mdp;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = 587;

			$mail->setFrom('no-reply@exostflash.ovh', 'noreply-ExostFlash');
			$mail->addAddress($destinataire);

			$mail->isHTML(true);
			$mail->Subject = utf8_decode($objet);
			$mail->Body    = $contenu;
			$mail->AltBody = 'Contenu au format texte pour les clients e-mails qiui ne le supportent pas';

			$mail->send();
		}
		catch (Exception $e) {
			echo "Le Message n'a pas été envoyé. Mailer Error: {$mail->ErrorInfo}";
		}  
	}


	function valid_donnees($donnees) {
		$donnees = trim($donnees);
		$donnees = stripslashes($donnees);
		$donnees = htmlspecialchars($donnees);
		return $donnees;
	}

	function genererChaineAleatoire() {
		$caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$chaineAleatoire = '';

		$longueurCaracteres = strlen($caracteres);

		for ($i = 0; $i < 35; $i++) {
			$chaineAleatoire .= $caracteres[random_int(0, $longueurCaracteres - 1)];
		}
		return $chaineAleatoire;
	}

?>