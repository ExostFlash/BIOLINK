<?php

define("LANG_FR", "FR");
define("LANG_EN", "EN");

$link_bd = $_SERVER['DOCUMENT_ROOT'] . "/SauvegardeDB/dbb.php";
$nom_de_la_base = "BioLink";

// page
$id_post_page = isset($_GET['id_post']) ? $_GET['id_post'] : null;
$page = isset($_GET['page']) ? $_GET['page'] : "about";
$lang = isset($_GET['lang']) ? $_GET['lang'] : LANG_FR;

// import
include($link_bd);
include("function.php");

session_start();

// import page
include(__DIR__ . "/dark/" . $lang . "/header.php");
include(__DIR__ . "/dark/" . $lang . "/" . $page . ".php");
include(__DIR__ . "/dark/" . $lang . "/footer.php");

if ($lang === LANG_EN) {
	include("en_sup.php");
} else {
	include("fr_sup.php");
}
