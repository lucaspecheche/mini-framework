<?php

namespace Core;

use PDO;

abstract class BaseModel
{
    private $pdo;
    protected $table;


    public function __contruct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function All()
    {
        $query = "SELECT * FROM {$this->table}";
        $stml = $this->pdo->prepare($query);
        $stml->execute();
        $result = $stml->fetchAll();
        $stml->closeCursor();
        return $result;
    }
}