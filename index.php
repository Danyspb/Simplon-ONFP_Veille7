<?php
    if(isset($_GET['con'])){
        echo"Login ou Mot de Passe incorrect";
    }
?>


<form action="Controller/UserController.php" method="post">
    <label >LOGIN:</label><br>
    <input type="text" name="login"><br>
    <label>MOT DE PASSE:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="connexion" value="SE CONNECTER">
</form>
