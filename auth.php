<?php
// Récupération des données du formulaire


$email = $_POST["email"];
$password = $_POST["password"];
$role="";


// Inscription d'un utilisateur
require_once("connect.php");
$pdoConnexion = new PDOConnexion();
$pdo = $pdoConnexion->createConnexion();

$sql = "select * from user where email='".$email."' and password='".$password."'";
$res = $pdo->query($sql);

if($res->rowCount()>0){  // s'il y a quelqu'un avec ce login et mot de passe
    foreach ($pdo->query($sql) as $row) {
        $role=$row['role'];
        session_start();  // on démarre la session
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["role"] = $row['role'];
        $_SESSION["nom"] = $row['nom'];
        $_SESSION["prenom"] = $row['prenom'];
        if($role == "admin")
        {
            header('Location:dashboardadmin.php');
        }
        else
        {
            header('Location:dashboardclient.php');
        }
    }
}
else
header('Location:signin.html');

?>