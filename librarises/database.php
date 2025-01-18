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

