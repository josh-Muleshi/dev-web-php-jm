<?php
    $r = session_start();
    require('admin.php');

    admin($r);

    if($_SESSION['connect'] != []){
        header('Location: profil.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="login.php" method="post">
        Email : <input type="email" name="email" placeholder="Entrez l'email" required><br>
        Password : <input type="password" name="pwd" placeholder="Entrez le mdp" required>

        <div style="color: red;">
            <?= (!empty($_GET['error'])? $_GET['error']: "")?>
        </div>

        <input type="submit" name="submit" value="Connexion">
    </form>
    <a href="show_register.php">Creer un compte</a>
</body>
</html>
