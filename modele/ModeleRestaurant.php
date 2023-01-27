<?php
require_once 'AccesDonnees.php';
class ModeleRestaurant
{
    private PDO $pdo;
    private const SELECT_RESTAURANTS = "SELECT idRestaurant, nom, adresse, cp, ville, telephone, description from restaurants";
    private const SELECT_RESTAURANT_BY_ID = "SELECT DISTINCT nom, adresse, cp, ville, telephone, description, auteur, note, commentaire
                    from restaurants r LEFT OUTER JOIN Avis a on r.idRestaurant = a.idRestaurant
                    WHERE r.idRestaurant = :idRestaurant;";

    private const SELECT_AVIS = "select auteur, note, commentaire from avis;";

    public function getRestaurants()
    {
        $cnx = new AccesDonnees();
        $this->pdo = $cnx->getConnexion();
        $query = self::SELECT_RESTAURANTS;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $resultat = $stmt->fetchAll();
        return $resultat;
    }

    public function getRestaurant ($idRestaurant){
        $cnx = new AccesDonnees();
        $this->pdo = $cnx->getConnexion();
        $query = self::SELECT_RESTAURANT_BY_ID;
        $pstmt = $this->pdo->prepare($query);
        $pstmt->bindValue(':idRestaurant', $idRestaurant);
        $pstmt->execute();
        $resultat = $pstmt->fetch();
        return $resultat;
    }

    public function getAvis()
    {
        $cnx = new AccesDonnees();
        $this->pdo = $cnx->getConnexion();
        $query = self::SELECT_AVIS;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $resultat = $stmt->fetchAll();
        return $resultat;
    }
}