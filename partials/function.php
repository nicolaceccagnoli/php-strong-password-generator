<?php

    #Dichiaro una funzione che mi generi la password randomica
    function generateRandomPassword($length) {

        #Dichiaro una variabile contenente i caratteri speciali
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*';

        #Dichiaro una variabile password con stringa vuota
        $password = '';
        
        #Dichiaro una variabile che contenga la lunghezza della stringa $characters
        $charactersLength = strlen($characters);

        #Creo un ciclo che data una certa lunghezza prosegue la sua iterazione
        for ($i = 0; $i < $length; $i++) {

            #E concatena a $password i singoli caratteri partendo da un indice casuale in $characters (interpretato come se fossi un Array)
            $password .= $characters[rand(0, $charactersLength - 1)];
        }

        #Restituisce password 
        return $password;

    };
    
?>
