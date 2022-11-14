<?php
class voiture{
    private $couleur;
    private $prix;
    private $marque;
    private static $vitesseMax=400;
    private static $nbV=0;
    public function __construct($couleur, $prix, $marque){
        self::$nbV++;
        $this->couleur=$couleur;
        $this->prix=$prix;
        $this->marque=$marque;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getMarque(){
        return $this->marque;
    }
    public function setCouleur($couleur){
        $this->couleur=$couleur;
    }
    public function setPrix($prix){
        $this->prix=$prix;
    }
    public function setMarque($marque){
        $this->marque=$marque;
    }
    public static function getVitesseMax(){
        return self::$vitesseMax;
    }
    public function ShowVoiture(){
        return "marque de la voiture : ".$this->marque." prix de la voiture : ".$this->voiture."couleur de la voiture : ".$this->voiture;
    }
}
$v1=new Voiture("noir","4M","lamborghini");
$v2=new Voiture("gris metallique","4M","porsche");
$v3=new Voiture("rouge","4M", "bmw");
$Voitures=array($v1,$v2,$v3);
?>
<h2 align='center'>Mes voitures </h2>
<table align='center' border='1'>
<tr><th>Marque</th><th>Prix</th><th>Couleur</th></tr>
<?php
foreach ($Voitures as $v){
    echo "<tr>";
    echo"<td>". $v->getMarque()."</td>";
    echo"<td>". $v->getPrix()."</td>";
    echo"<td>". $v->getCouleur()."</td>";
    echo "</tr>";

}?>
</table>
<?php
?>