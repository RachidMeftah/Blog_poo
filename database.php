<?php

/**
 * Connection à la base de donnés
 */
function getPdo()
{
    $pdo = new PDO('mysql:host=localhost;dbname=blog_poo;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    return $pdo;
}


function findAllArticles()
{
    $pdo = getPdo();
    $data = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
    $articles = $data->fetchAll();

    return $articles;
}

function findArticle(int $article_id)
{
    $pdo = getPdo();

    $query = $pdo->prepare("SELECT * FROM articles WHERE id= :article_id");
    $article = $query->execute(['article_id' => $article_id]);
    $article = $query->fetch();

    return $article;
}
