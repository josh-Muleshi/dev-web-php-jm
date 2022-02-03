<?php

    session_start();

    $articles = array(
        ['pain', 1000],
        ['chocolat', 5000],
        ['yes', 4500],
        ['mangue', 10000],
        ['chips', 25000]
    );

    $art = $_POST['dsg'];
    $qte = $_POST['quantite'];

    foreach($articles as $a){
        if ($art == $a[0]) {
            $pu = $a[1];
            break;
        }
    }

    if ($qte > 0) {
        $total = $qte * $pu;

        $_SESSION['articles'][] = [$art, $qte, $pu, $total];

        foreach($_SESSION['articles'] as $a){
            echo 'Article : ' .$a[0]. '<br>';
            echo 'Qte : ' .$a[1]. '<br>';
            echo 'PU : ' .$a[2]. '<br>';
            echo 'Total : ' .$a[3]. 'Fc<br>';
            echo '<br><hr>';
        }

    }else{
        echo '<h3 style="color:red">Qte invalide</h3>';
    }

    //echo $qte > 0 ? "Total : ". $qte * $pu ." Fc" : '<h3 style="color:red">Qte invalide</h3>';

    