<?php
    require_once 'BD.php';

    function testconn ($login,$password){
        $co = "SELECT * FROM utilisateur WHERE login= '$login' AND password='$password'";
        global $bd;
        return $bd->query($co)->fetch();

    }
