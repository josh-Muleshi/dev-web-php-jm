<?php

    if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $matricule = $_POST['matricule'];
        $promotion = $_POST['promotion'];
        $email = $_POST['email'];
        echo "Bienvenu $name $lastname $firstname $matricule $promotion $email";
    }else{
        echo 'Desole cette clef n\'existe pas';
    }