<?php
    /* Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta */
    $randomNumbers = [];
    $counter = 0;

    while ($counter < 15) {
        $randomNumber = rand(1, 30);
        if (!in_array($randomNumber, $randomNumbers)) {
            array_push($randomNumbers, $randomNumber);
            $counter++;
        } 

        
    }

    var_dump($randomNumbers);
?>