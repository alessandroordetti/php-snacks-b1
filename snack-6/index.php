<?php
    /* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],

        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $values = array_values($db);

    var_dump($values);

    //scompogno in due array separati
    $teachers = $db['teachers'];
    $pm = $db['pm'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="teachers">
        <h1>Teachers:</h1>
        <ul>
            <?php
                for ($i = 0; $i < count($teachers); $i++){
                    $current = $teachers[$i]; ?>
                    <li> <?php echo $current['name']; ?> <?php echo $current['lastname']; ?></li> 
                <?php } ?>
        </ul>
    </div>

    <div class="pm">
        <h1>Pm:</h1>
        <ul>
            <?php
                for ($i = 0; $i < count($pm); $i++){
                    $current = $pm[$i]; ?>
                    <li> <?php echo $current['name']; ?> <?php echo $current['lastname']; ?></li> 
                <?php } ?>
        </ul>
    </div>
</body>
</html>