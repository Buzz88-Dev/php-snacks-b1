<?php 

    // Creiamo un array contenente le partite di basket di un'ipotetico calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    // Stampiamo a schermo tutte le partite con questo schema.

    // Olimpia Milano - Cantù | 55 - 60

    $arr_partite = [
        // partita 1
        [
            [
                'nome' => 'Olimpia Milano',
                'di_casa' => true,
                'punteggio' => 55,
            ],

            [
                'nome' => 'Cantu',
                'di_casa' => false,
                'punteggio' => 60,
            ],
        ],

        // partita 2
        [
            [
                'nome' => 'Virtus bologna',
                'di_casa' => true,
                'punteggio' => 79,
            ],

            [
                'nome' => 'Treviso',
                'di_casa' => false,
                'punteggio' => 68,
            ],
        ],

        // partita 3
        [
            [
                'nome' => 'Sassari',
                'di_casa' => true,
                'punteggio' => 74,
            ],

            [
                'nome' => 'Torino',
                'di_casa' => false,
                'punteggio' => 72,
            ],
        ],
    ];
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
    
    <?php 
        $arr_length = count($arr_partite);

        for ($_i = 0; $_i < $arr_length; $_i++){
            $partita = $arr_partite[$_i]; ?>
            <div>
                <span class="<? echo $partita[0]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[0]['nome'] ?></span>
                <span class="<? echo $partita[1]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[1]['nome'] ?></span>
                <? echo "| {$partita[0]['punteggio']} - {$partita[1]['punteggio']}"?>
            </div><?php
        };
    ?>
</body>
</html>