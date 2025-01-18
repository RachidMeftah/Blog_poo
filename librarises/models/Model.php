<?php
require_once('librarises/database.php');

class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = getPdo();
    }
}
