<?php

	date_default_timezone_set('Europe/Paris');

	$nom_du_serveur ="localhost";
	$nom_du_serveur ="ca.exostflash.ovh";
	$nom_de_la_base ="BioLink";
	$nom_utilisateur ="BioLink";
	$passe ="WP55yn6BJh3jVRFA";

	try {
		$db = new PDO('mysql:host='.$nom_du_serveur.';dbname='.$nom_de_la_base.';charset=utf8', ''.$nom_utilisateur.'', ''.$passe.'');
	}
	catch(Exception $e) {
		die('<b>Il y a un probl&egrave;me sur notre site, revenez plus tard ! </b><br/><br/>' . $e->getMessage());
	}

	 
	$dbb = mysqli_connect($nom_du_serveur,$nom_utilisateur,$passe,$nom_de_la_base);
	if (mysqli_connect_errno()){
		echo "<b>Il y a un probl&egrave;me sur notre site, revenez plus tard ! </b><br/><br/>" . mysqli_connect_error();
	}

?>
