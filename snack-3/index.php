<?php
    /* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

    Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z */

    $posts = [
        '10/02/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ]
        ],

        '15/02/2019' => [
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ]
        ],

        '25/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
    ];

    for ($i = 0; $i < count($posts); $i++){

    }
?>