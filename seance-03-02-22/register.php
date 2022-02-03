<?php
    session_start();
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['pwd']) && isset($_POST['gender'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $pwd = $_POST['pwd'];

        if(empty($name) || empty($email) || empty($tel) || empty($pwd)){
            echo "$name, $email,$tel or $pwd is empty";
        }else{

            $_SESSION['connexion'] = [
                $name, 
                $email, 
                $tel, 
                $pwd
            ];
            
            header("Location: profil.php");
            exit();
        }

    }else{
        echo 'Desole cette clef n\'existe pas';
    }