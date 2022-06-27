<?php 

  function myArrayNumb($min,$max,$item){
    $array_number = [];
    $_i = 0;

    while ($_i < $item){ 
        $numb = rand($min,$max);
        if (!in_array($numb, $array_number)){
            $array_number[] = $numb;
            $_i++;
        }
    }

    return $array_number;
  }

  var_dump(myArrayNumb(1000,2000,15));

?>
