<?php
require("connection.php");
$id=$_GET['id'];
$sql="DELETE from message where id='".$id."'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
require("data.php");
?>