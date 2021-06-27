<?php
session_start();
    require_once '../Model/ContactModel.php';
    if (isset($_POST['ajout'])){
        extract($_POST);
        $iduser = $_SESSION['iduser'];
        $inser = ajout($nom,$prenom,$telephone,$iduser);
        if ($inser > 0 ){
            header("location:/Projets/teste/View/Contact.php");
        }else{

        }
    }
