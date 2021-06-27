<?php
    session_start();
    require_once '../Model/ContactModel.php';
    $iduser = $_SESSION ['iduser'];
    $contact = recucontact($iduser);
?>
<button><a href="../index.php"> DECONNEXION </a> </button><br>

<form action="../Controller/ContactController.php" method="post">
    <label>NOM</label><br>
    <input type="text" name="nom"><br>
    <label>PRENOM</label><br>
    <input type="text" name="prenom"><br>
    <label>TELEPHONE</label><br>
    <input type="number" name="telephone"><br><br>
    <input type="submit" name="ajout" value="Ajouter"><br>

</form>

<table width="70%" border="1">
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>TELEPHONE</th>
        <th>ACTION</th>
    </tr>
    <?php
        foreach ($contact as $contacts){
            echo '
            <tr>
                <td>'.$contacts['nom'].'</td>
                <td>'.$contacts['prenom'].'</td>
                <td>'.$contacts['telephone'].'</td>
                <td>
                    <button>Modifier</button>
                    <button supp='.$contacts['id'].'>Supprimer</button>
                </td>
            </tr>
            ';
        }
    ?>
</table>