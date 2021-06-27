<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $bdname = 'gerercontact';

try {
    $bd = new PDO('mysql:host='. $host.';dbname='.$bdname,$user,$password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

}catch (PDOException $ex){
    die("Erreur de connexion a la base de donnee");
}
