
<?php
    /**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
 */

    $matches = [
        [
            'homeTeam' => 'Milano',
            'guestTeam' => 'Bologna',
            'scoreHomeTeam' => '43',
            'scoreGuestTeam' => '54'
        ],
        [
            'homeTeam' => 'Pavia',
            'guestTeam' => 'Venezia',
            'scoreHomeTeam' => '89',
            'scoreGuestTeam' => '70'
        ]
        ];

        var_dump($matches);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php for ($index = 0; $index < count($matches); $index++ ){ ?>
            <li> 
                <?php echo $matches[$index]['homeTeam'] ?> - <?php echo $matches[$index]['guestTeam'] ?> | <?php echo $matches[$index]['scoreHomeTeam'] . '-' . $matches[$index]['scoreGuestTeam']?>     
            </li>
        <?php } ?>
    </ul>
</body>
</html>