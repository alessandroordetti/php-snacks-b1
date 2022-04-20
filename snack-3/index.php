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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $keys = array_keys($posts);
            $values = array_values($posts);

            for ($i = 0; $i < count($keys); $i++){ ?>
            <h5>Data: <?php echo $keys[$i]; ?></h5>

            <?php for ($index = 0; $index < count($values[$i]); $index++) { ?>
                
                <p>
                    <?php echo $values[$i][$index]['title'] ?>
                </p>

                <p>
                    <?php echo $values[$i][$index]['author'] ?>
                </p>

                <p>
                    <?php echo $values[$i][$index]['text'] ?>
                </p>
            <?php } ?>
        <?php } ?>

    </ul>
</body>
</html>