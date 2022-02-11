<?php
/**
 * le lancement de la session
 */
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $pwd = $_POST['pwd'];
    $gender = $_POST['gender'];

    if(empty($name) || empty($email) || empty($tel) || empty($pwd)){
        echo "$name, $email, $tel or $pwd is empty";
    }

    $_SESSION['register'][] = [
        'name' => $name, 
        'email' => $email, 
        'tel' => $tel, 
        'pwd' => $pwd,
        'gender' => $gender
    ];

    foreach($_SESSION['register'] as $key => $a){
        if ($email == $a['email'] && $pwd == $a['pwd']) {
            $_SESSION['connect'] = $key;
            header("Location: ./profil.php");
            break;
        }
    }