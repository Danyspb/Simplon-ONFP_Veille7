
<?php
        require_once 'Entity/Etudiant.php';

        $prenom = 'Aliou';  // qui est de type chaine de caractere
        $nom = "Diop";    // qui est aussi de type chaine de caractere
        $age = 20;    // qui est de type entier
        $estEtudiant = true;  // qui de type booléen
        $cours = array('UML','JAVA','PHP','PYTHON'); // Type tableau
        $et = new Etudiant(); // qui represente la classe etudiant qui
                               //se trouve dans le package entite

        echo gettype ($prenom);
        echo '<br>','<br>';
        echo gettype ($nom);
        echo '<br>','<br>';
        echo gettype ($age);
        echo '<br>','<br>';
        var_dump($cours);
        echo '<br>','<br>';
        var_dump($et);
        echo '<br>','<br>';
        var_dump($estEtudiant);

























?>
