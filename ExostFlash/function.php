<?php

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
