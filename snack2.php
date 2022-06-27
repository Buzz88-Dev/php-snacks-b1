<?php 

    $message = 'Parametri non trovati';

    $name = $_GET['name'];
    var_dump($name);

    $mail = $_GET['mail'];
    var_dump($mail);

    $age = $_GET['age'];
    var_dump($age);

    // http://localhost/Esercizio2/php-snacks-b1/snack2.php?name=omar&mail=omarbuzzoni@gmail.com&age=34

    $lunghezza_name = strlen($name);
    var_dump($lunghezza_name);

    $position_chiocciola_mail = strpos($mail, '@');
    var_dump($position_chiocciola_mail);
    $position_punto_mail = strpos($mail, '.', $position_chiocciola_mail);
    var_dump($position_chiocciola_mail);

    $age_number = is_numeric($age);
    var_dump($age_number);

    if ($lunghezza_name > 3 && strpos($mail, '@') !== false && strpos($mail, '.', $position_chiocciola_mail) !== false &&  $age_number !== false) {
        $message = "Accesso riuscito";
    } else {
        $message = "Accesso negato";
    };
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
    <p><?php echo $message ?></p>
</body>
</html>