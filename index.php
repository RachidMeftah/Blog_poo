<?php
//require_once('librarises/database.php');
require_once('librarises/models/Article.php');

$model = new Article();

/**
 * 2. Récupération de tous les articles
 */
$articles = $model->findAll();

/**
 * 3. Affichage
 */
$pageTitle = "Accueil";
ob_start();
require('templates/articles/index.html.php');
$pageContent = ob_get_clean();

require('templates/layout.html.php');
