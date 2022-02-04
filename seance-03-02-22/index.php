<?php
    session_start();
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
    <form method="post">
        Email : <input type="email" name="email" placeholder="Entrez l'email" required><br>
        Password : <input type="password" name="pwd" placeholder="Entrez le mdp" required><br>
        <input type="submit" name="submit" value="Connexion">
    </form>
    <a href="show_register.php">Creer un compte</a>
</body>
</html>
<?php

    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        foreach($_SESSION['connexion'] as $key => $a){
            if ($email == $a['email'] && $pwd == $a['pwd']) {
                $_SESSION['con'] = $key;
                header("Location: profil.php");
                exit();
                break;
            }
            else{
                echo "<script>alert('login or password incorrect.')</script>";
            }
        }

    }