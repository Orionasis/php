<?php
class Produit{
    private $id;
    private $libelle;
    private $prix;
    private $quantite;
    public function __construct($libelle, $prix, $quantite){
        $this->libelle=$libelle;
        $this->prix=$prix;
        $this->quantite=$quantite;
    }
    public function __toString(){
        return "Produit : Libelle=".$this->libelle." Prix= ".$this->prix." Quantite = ".$this->quantite;
    }
    public function getID(){
        return $this->id;
    }
    public function setID($id){
        $this->id=$id;
        return $this;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
 }

?>
