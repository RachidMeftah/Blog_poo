<?php

require_once("librarises/Models/Model.php");

class Article extends Model
{
    public function findAll()
    {
        $data = $this->pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
        $articles = $data->fetchAll();

        return $articles;
    }

    public function find(int $article_id)
    {
        $query = $this->pdo->prepare("SELECT * FROM articles WHERE id= :article_id");
        $article = $query->execute(['article_id' => $article_id]);
        $article = $query->fetch();

        return $article;
    }
}
