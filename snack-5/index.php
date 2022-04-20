<?php
    /* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

    $paragraph = 'E\' un pezzo unico l\'orologio scippato al pilota della Ferrari Charles Leclerc lunedì sera, a Pasquetta, in una via della Darsena di Viareggio (Lucca). Secondo quanto emerge dall\'inventario delle indagini, si tratta di un Richard Mille Rm 67-02, cronografo di lusso cui è impraticabile dare un valore reale, comunque un prototipo dell\'orologio rubato al ferrarista era stato venduto all\'asta nel 2021 per circa 2 milioni di franchi svizzeri, quasi due milioni di euro ai valori odierni.';

    var_dump(explode('.', $paragraph));
?>