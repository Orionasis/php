<?php
require("connection.php");
$id=$_GET['id'];
$nom="";
$email="";
$contenu="";
$sql="update message set nom='coucou',email='coucou@gmail.com',contenu='coucou cc' where id='".$id."'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
require("data.php");
?>