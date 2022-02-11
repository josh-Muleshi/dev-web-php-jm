<?php
    
    function jdm(bool $r): array{
        $tab = $_SESSION['register'][] = [
            'name' => "josue", 
            'email' => "muleshi@gmail.com", 
            'tel' => "456", 
            'pwd' => "456",
            'gender' => "M"
        ];

        return $tab;
    }