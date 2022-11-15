<?php
require_once("connect.php");
require_once("mod.php");
class DP{
    public function createProduit(Produit $produit)
    {
        //appel au PDO pour faire l'insertion
       
        $pdoConnexion = new PDOConnexion();
        $pdo = $pdoConnexion->createConnexion();

        $sql = "INSERT INTO Produit (libelle, prix, quantite)
                VALUES ('".$produit->getLibelle()."', '".$produit->getPrix()."', '".$produit->getQuantite()."')";
        $pdo->exec($sql);
        echo "<br/>New product created successfully";
    }

    public function listProduit()
    {

        $produits=array();
        $i=0;
        $pdoConnexion = new PDOConnexion();
        $pdo = $pdoConnexion->createConnexion();
        $strSQL = "SELECT * FROM produit";
        foreach ($pdo->query($strSQL) as $row) {
            $produit = new Produit($row['libelle'],$row['prix'],$row['quantite']);
            $produit->setId($row['id']);
            $produits[$i]=$produit;
            $i++;
        }
        return $produits;
    }

    public function deleteProduit(Produit $produit)
    {
        //appel au PDO pour faire la suppression
    }

    public function updateProduit(Produit $produit)
    {
        //appel au PDO pour faire la mise à jour
    }
}
?>