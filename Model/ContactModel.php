<?php
    require_once 'BD.php';

    function ajout ($nom,$prenom,$telephone,$iduser){
        $ins = "INSERT INTO contacts VALUES (null,'$nom','$prenom','$telephone','$iduser')";
        global $bd;
        return $bd->exec($ins);
    }

    function recucontact ($iduser){
        $rec = "SELECT * FROM contacts WHERE iduser = '$iduser'";
        global $bd;
        return $bd->query($rec)->fetchAll();

    }
