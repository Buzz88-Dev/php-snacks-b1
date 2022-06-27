<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],

    '10/02/2020' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],

    '15/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$date = array_keys($posts);
// var_dump($date);
var_dump($posts[$date[0]]);


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
    for ($_i = 0; $_i < count($posts); $_i++) {
        $post = $posts[$date[$_i]]; ?>
        <div class="margin">
            <div>
                <p class="text"><?= $date[$_i] ?></p>
            </div>
        <div>
            <?php
                for ($_j = 0; $_j < count($post); $_j++) { ?>
                    <div>
                        <p class="red"><?= $post[$_j]['title'] ?></p>
                        <p class="green"><?= $post[$_j]['author'] ?></p>
                        <p class="blue"><?= $post[$_j]['text'] ?></p>
                    </div>
            <?php } ?>
                </div>
            </div>
        <?php } ?>

</body>
</html>