<?php
    session_start();

    $key = $_SESSION['connect'];
    
    ?>
        <h1>Bienvenu sur le profil <a href="deconnection.php">Se deconnecter</a></h1>
    <?php
    echo 'Nom: '.$_SESSION['register'][$key]['name'].'<br>';
    echo 'Email: '.$_SESSION['register'][$key]['email'].'<br>';
    echo 'Tel: '.$_SESSION['register'][$key]['tel'].'<br>';
    echo 'Genre: '.$_SESSION['register'][$key]['gender'].'<br>';

    //session_destroy();

    


