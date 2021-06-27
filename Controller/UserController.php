<?php
session_start();
    require_once '../Model/UserModel.php';

    if(isset($_POST['connexion'])){
        extract($_POST);
        $utilisateur = testconn( $login, $password);

        if ($utilisateur == null){
            header("location:/Projets/teste/index.php?con");
        }else{
            $_SESSION['iduser'] = $utilisateur ['id'];

            header("location:/Projets/teste/View/Contact.php");
        }

        if (isset($_GET['decon'])){
            session_unset();
            $_SESSION = array();
            header("location:/Projets/teste/index.php");
        }
    }