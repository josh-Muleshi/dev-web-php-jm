<?php
    session_start();

    if(empty($email) || empty($pwd)){
        echo "$name, $email, $tel or $pwd is empty";
    }

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    foreach($_SESSION['register'] as $key => $a){
        if ($email == $a['email'] && $pwd == $a['pwd']) {
            $_SESSION['connect'] = $key;
            header("Location: ./profil.php");
            break;
        }
        header("Location: ./index.php?error=login or password incorrect");
    }
