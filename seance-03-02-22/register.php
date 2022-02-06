<?php
/**
 * le lancement de la session
 */
    session_start();
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['pwd']) && isset($_POST['gender'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $pwd = $_POST['pwd'];
        $gender = $_POST['gender'];

        if(empty($name) || empty($email) || empty($tel) || empty($pwd)){
            echo "$name, $email,$tel or $pwd is empty";
        }else{

            $_SESSION['connexion'][] = [
                'name' => $name, 
                'email' => $email, 
                'tel' => $tel, 
                'pwd' => $pwd,
                'gender' => $gender
            ];

            foreach($_SESSION['connexion'] as $key => $a){
                if ($email == $a['email'] && $pwd == $a['pwd']) {
                    $_SESSION['con'] = $key;
                    header("Location: profil.php");
                    exit();
                    break;
                }
            }
        }

    }else{
        echo 'Desole cette clef n\'existe pas';
    }