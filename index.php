<?php
require_once('database.php');

$articles = findAllArticles();

/**
 * 3. Affichage
 */
$pageTitle = "Accueil";
ob_start();
require('templates/articles/index.html.php');
$pageContent = ob_get_clean();

require('templates/layout.html.php');
?>

