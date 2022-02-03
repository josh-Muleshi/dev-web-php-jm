<?php
    session_start();

    if (isset($_POST['email']) && isset($_POST['pwd'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(empty($email) || empty($pwd)){
            echo "$email or $pwd is empty";
        }else{

            if($_SESSION['connexion'][1] == $email && $_SESSION['connexion'][3] == $pwd){
                echo $email;
                header("Location: profil.php");
                exit();
            }
            else{
                echo 'error';
            }
        }

    }else{
        echo 'Desole cette clef n\'existe pas';
    }