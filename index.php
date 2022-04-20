
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

        for ($i = 0; $i < count($matches); $i++) {
            echo $matches[$i]['homeTeam'];
        }
?>