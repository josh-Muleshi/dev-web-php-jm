<?php
    
    function admin(bool $r): array{
        
        return $_SESSION['register'][] = [
            'name' => 'josh',
            'email' => 'jmuleshi2@gmail.com', 
            'tel' => '456', 
            'pwd' => '1234567',
            'gender' => 'M'
        ]; 
    }