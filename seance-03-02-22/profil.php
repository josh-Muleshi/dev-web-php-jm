<?php
    session_start();

    print_r($_SESSION['connexion']);

    $key = $_SESSION['con'];
    echo 'Nom: '.$_SESSION['connexion'][$key]['name'].'<br>';
    echo 'Email: '.$_SESSION['connexion'][$key]['email'].'<br>';
    echo 'Tel: '.$_SESSION['connexion'][$key]['tel'].'<br>';
    echo 'Genre: '.$_SESSION['connexion'][$key]['gender'].'<br>';

    //session_destroy();

    


