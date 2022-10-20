<?php
//partie 1: connect to the db
require("connection.php");

//partie 2 : recovery of the data from db
$sql = "SELECT id, nom, email, contenu FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
  
    <table border="1" align="center">
        <tr><th> ID </th><th> Nom </th><th> Email </th> <th> Contenu </th><th>Supprimer</th><th>update</th></tr>
        <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row["id"]."</td>");
    echo("<td>".$row["nom"]."</td>");
    echo("<td>".$row["email"]."</td>");
    echo("<td>".$row["contenu"]."</td>");?>
    <td><button onclick="delete_data(<?php echo $row['id'];?>)" class="btn btn-danger"></button>Supprimer</td>;
    <td><button onclick=update_data() class="btn btn-warning"></button>Update</td>;
        <?php echo("</tr>");
  }
  ?>
  </table>
  <?php
} else {
  echo "0 results";
}
?>