<?php
class Etudiant{
    public $nom;
    public $age;

    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function infoEtudiant(){
        return "Nom : ".$this->nom ." Age : ".$this->age;
    }
}
$e1=new Etudiant();
$e1->setNom("Orionas");
$e1->setAge(26);
$e2=new Etudiant();
$e2->setNom("Firiane");
$e2->setAge(22);
echo $e1->infoEtudiant();
echo "<br/>";
echo $e2->infoEtudiant();