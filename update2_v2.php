<?php
require("connection.php");
$id=$_GET['id'];
$nom="";
$email="";
$contenu="";
$sql="select * from message where id='".$id."'";
$result=$conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $nom=$row["nom"];
    $email=$row["email"];
    $contenu=$row["contenu"];}
    ?>
    <h3 align="center">Formulaire de changement de message</h3>
    <div style="margin:20px;" name="postMessage">
    <form action="update_4.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" value="<?php echo $nom;?>" class="form-control" id="nom" placeholder="Enter new name"></div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email;?>" class=form-control id="email" placeholder="Enter new email"></div>
        <div class="form-group">
            <label for="contenu">Message</label>
            <textarea class="form-control" name="contenu" id="contenu" placeholder="enter new message"><?php echo $contenu;?></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
        </form>
