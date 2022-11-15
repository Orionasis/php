<?php

echo"Bienvenue à PDO, DAO et l'orienté objet avec PHP<br/>";

echo"Pour ajouter un produit cliquer ici <a href=prod.html>ici</a>";
echo"<br/>";


require_once("repo.php");
$manager = new DP();
$produits = $manager->listProduit();


?>

<table align="center" border="1">
<tr><th>ID</th><th>Libelle</th><th>Prix</th><th>Quantite</th></tr>
<?php
foreach($produits as $produit)
{
    echo"<tr>";
    echo"<td>".  $produit->getId()."</td>";
    echo"<td>".  $produit->getLibelle()."</td>";
    echo"<td>".  $produit->getPrix()."</td>";
    echo"<td>".  $produit->getQuantite()."</td>";
    echo"</tr>";
   
}
?>
</table>