<?php
    session_start();

    $key = $_SESSION['con'];
    if(!empty($key)){
        header('location: profil.php');
    }
    ?>
    <h1>Bienvenu sur le profil</h1>
    <?php
    echo 'Nom: '.$_SESSION['connexion'][$key]['name'].'<br>';
    echo 'Email: '.$_SESSION['connexion'][$key]['email'].'<br>';
    echo 'Tel: '.$_SESSION['connexion'][$key]['tel'].'<br>';
    echo 'Genre: '.$_SESSION['connexion'][$key]['gender'].'<br>';

    //session_destroy();

    


