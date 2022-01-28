<?php

    session_start();

    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['pwd'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(empty($nom) || empty($email) || empty($pwd)){
            echo "$nom, $email or $pwd is empty";
        }else{
            $con = array(
                $nom, $email, $pwd
            );

            $_SESSION['con'][] = [$nom, $email, $pwd];

            foreach($_SESSION['con'] as $c){
                echo 'Nom : ' .$c[0];
                echo ' email : ' .$c[1];
                echo '<br><hr>';
            }
        }
        
    }else{
        echo 'Desole cette clef n\'existe pas';
    }
