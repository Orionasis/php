<?php
require("connection.php");

$nom=$_GET["nom"];
$email=$_GET["email"];
$contenu=htmlspecialchars($_GET["contenu"],ENT_QUOTES);
$sql = "INSERT INTO message (nom, email, contenu) VALUES ('".$nom."','".$email."','".$contenu."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    require("data.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>