<?php
class Ecole{
    private $nom;
    private $adresse;
    private $tel;
    /*public function __construct(){

    }*/
    public function __construct($nom,$adresse,$tel){
        $this->nom=$nom;
        $this->adresse=$adresse;
        $this->tel=$tel;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getTel(){
        return $this->tel;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }
    public function setTel($tel){
        $this->tel=$tel;
    }
    public function getInfoEcole(){
        return "Nom : ".$this->nom." Adresse : ".$this->adresse." tel : ".$this->tel;
    }
}
$e1=new Ecole("ENSI","Manouba","+123");
$e2=new Ecole("INSAT","TUNIS","+456");
$e3=new Ecole("ESPRIT","Ghazela","+789");
$tab=array($e1,$e2,$e3);
foreach ($tab as $e){
    echo $e->getInfoEcole()."<br/>";
}