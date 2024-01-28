<?php

$page_list = ["about", "resume", "contact"];
$lang_list = ["FR", "EN"];
define("LANG_FR", "FR");
define("LANG_EN", "EN");

// page
$page = isset($_GET['page']) ? $_GET['page'] : "about";
$lang = isset($_GET['lang']) ? $_GET['lang'] : LANG_FR;

if (!in_array($page, $page_list)) {
	$page = "404";
}

if (!in_array($lang, $lang_list)) {
	$lang = "FR";
}

// import
include("function.php");

// import page
include(__DIR__ . "/dark/" . $lang . "/header.php");
include(__DIR__ . "/dark/" . $lang . "/" . $page . ".php");
include(__DIR__ . "/dark/" . $lang . "/footer.php");


if (isset($_REQUEST['btn_contact'])) {
	$nom = valid_donnees($_REQUEST['nomContact']);
	$prenom = valid_donnees($_REQUEST['prenomContact']);
	$full_name = $nom . " " . $prenom;
	$email = valid_donnees($_REQUEST['emailContact']);
	$message = valid_donnees($_REQUEST['messageContact']);

	$site = "ExostFlash";
	$create_datetime = date("Y-m-d H:i:s");

	$mysqli = mysqli_connect("localhost:3306", "sunu2380_biolink", "ogejp^3H_.Kk", "sunu2380_biolink");

	if (mysqli_connect_errno()) {
		die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
	}

	$query = "INSERT INTO contact (website, lang, full_name, mail, messages, create_datetime) VALUES (?, ?, ?, ?, ?, ?)";
	$statement = $mysqli->prepare($query);

	$statement->bind_param("ssssss", $site, $lang, $full_name, $email, $message, $create_datetime);

	$statement->execute();

	$statement->close();
	$mysqli->close();
}
