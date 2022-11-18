<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];
$dateins=date("Y-m-d H:i:s");
require_once("connect.php");
        $pdoConnexion = new PDOConnexion();
        $pdo = $pdoConnexion->createConnexion();
        $sql="INSERT INTO user(nom, prenom,email, password, role,dateCreationCompte) VALUES ('".$nom."','".$prenom."','".$email."','".$password."','client','".$dateins."')";
        $pdo->exec($sql);
        header('Location:index.php');
?>