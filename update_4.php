<?php
require("connection.php");
$id=$_GET['id'];
$nom=$_GET['nom'];
$email=$_GET['email'];
$contenu=$_GET['contenu'];
$sql="update message set nom='".$nom."', email='".$email."', contenu='".$contenu."' where id='".$id."'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    //header('Location:http://127.0.0.1/day_4');
  } else {
    echo "Error updating record: " . $conn->error;
  }
  require("data.php");?>