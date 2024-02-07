<?php

    #Dichiaro una funzione che mi generi la password randomica
    function generateRandomPassword($length, $includeAlphabet, $includeNumbers, $includeSpecials, $noRepeat) {

        #Dichiaro una variabile che contenga i caratteri dell'alfabeto
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        #Dichiaro una variabile che contenga i caratteri numerici
        $numbers = '1234567890';

        #Dichiaro una variabile che contenga i caratteri speciali
        $specials = '!@#$%^&*[]{}£/()=';
        
        #Dichiaro una variabile password che inizialmente è vuota
        $password = '';
        
        #Dichiaro una variabile per i caratteri disponibili
        $characters = ''; 
        
        #Se la checkbox delle lettere è spuntata allora
        if ($includeAlphabet) {

            #ai caratteri disponibili vengono aggiunti quelli dell'alfabeto
            $characters .= $alphabet;
        }
        #Se la checkbox dei numeri è spuntata allora
        if ($includeNumbers) {

            #ai caratteri disponibili vengono aggiunti i numeri
            $characters .= $numbers;
        }
        #Se la checkbox dei caratteri speciali è spuntata allora
        if ($includeSpecials) {

            #ai caratteri disponibili vengono aggiunti quelli speciali
            $characters .= $specials;
        }
        
        #Lego ad una variabile una funzione di controllo per la lunghezza dei caratteri disponibili
        $charactersLength = strlen($characters);

        #Dichiaro un Array per tenere traccia dei caratteri utilizzati
        $usedChars = []; 
        
        #Tramite ciclo while fintanto che la password è più corta della lunghezza scelta dall'utente tramite l'input   
        while (strlen($password) < $length) {

            #Lego ad una variabile un carattere casuale preso dalla stringa di caratteri disponibili
            $randomChar = $characters[rand(0, $charactersLength - 1)]; 
            
            #Se $noRepeat è true allora controlla se il carattere è già stato utilizzato
            if ($noRepeat && in_array($randomChar, $usedChars)) {

                #Se il carattere è già stato utilizzato passa al prossimo ciclo
                continue; 
            }

            #Assegno alla password i caratteri casuali disponibili
            $password .= $randomChar; 

            #Aggiungo il carattere all'array dei caratteri utilizzati
            $usedChars[] = $randomChar; 
        }
        
        return $password;
    }
                
?>
