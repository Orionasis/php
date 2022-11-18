<?php
$email=$_POST["email"];
$password=$_POST["password"];
$role="";
require_once("connect.php");
$pdoConnexion=new PDOConnexion();
$pdo=$pdoConnexion->createConnexion();
$sql="select * from user where email='".$email."' and password='".$password."'";
$res=$pdo->query($sql);
if($res->rowCount()>0){
    foreach($pdo->query($sql)as $row){
        $role=$row['role'];
        session_start();
        $_SESSION["email"]=$row['email'];
        $_SESSION["role"]=$row['role'];
        if($role=="admin") header('Location:dashboardadmin.php');
        else{
            header('Location:dashboardclient.php');
        }
    }
}
else
header('Location:signin.html');
?>
