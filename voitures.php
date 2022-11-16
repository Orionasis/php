<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Voiture</title>
</head>
<?php
$xml=simplexml_load_file("voitures.xml");
?>
<h1 align="center">Liste voitures</h1>
<table align="center" class="table table-primary table-bordered table-striped">
    <thead>
        <tr>
        <th scope="col">Marque</th>
        <th scope="col">modele</th>
        <th scope="col">immatriculation</th>
        <th scope="col">prix</th>
        </tr>
    </thead>
    <tbody>
    <?php
    static $i=1;
    foreach($xml->voitures as $cle=>$val){?>
        <tr>
        <td><?php echo $val->marque  ?></td>
        <td><?php echo $val->modele ?></td>
        <td><?php echo $val->immatriculation ?></td>
        <td><?php echo $val->prix  ?></td>
        </tr>
        <?php
        }
        $i++;
    ?> 
    </div> 
  </tbody>
</table>