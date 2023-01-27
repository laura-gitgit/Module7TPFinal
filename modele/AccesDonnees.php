<?php

class AccesDonnees
{
    private PDO $pdo;

    public function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=Restaurant";
        $this->pdo = new PDO($dsn, 'root', 'Passw0rd');
        return $this->pdo;
    }


}