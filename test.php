<?php
$prenom ='Anna';
$nom ='Dione';
$annee = 1990;
define('ACTUEL','2021');

$age =ACTUEL-$annee;
 echo 'son age est '.$age.' ans';
 echo '<br><br>';

 if ($age >=18){
     echo 'elle peut entrer';
 }else{
     echo 'elle est mineur';
 }
