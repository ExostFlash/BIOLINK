<?php

$link_bd = $_SERVER['DOCUMENT_ROOT'] . "/SauvegardeDB/dbb.php";
$nom_de_la_base = "BioLink";

// page

if (isset($_GET['id_post'])) {
	$id_post_page = $_GET['id_post'];
}

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "about";
}

if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
} else {
	$lang = "FR";
}
// import +

include($link_bd);
include("function.php");

session_start();

?>

<?php
// import page !

include("dark/" . $lang . "/header.php");
include("dark/" . $lang . "/" . $page . ".php");
include("dark/" . $lang . "/footer.php");

if ($lang == ("EN/" or "EN")) {
	include("en_sup.php");
} else {
	include("fr_sup.php");
}
?>