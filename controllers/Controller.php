<?php

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        echo "Bienvenu $name $lastname $firstname";
    }else{
        echo 'Desole cette clef n\'existe pas';
    }