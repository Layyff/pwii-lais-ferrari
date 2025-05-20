<?php

    $x = 5;
    $y = 9;
    $media = ($x + $y)/ 2;

    if ($media >= 6){
        echo "Aprovado";
    }elseif ($media <= 6 && $media >=4){
        echo "Recuperação";
    }else {
        echo "Reprovado";
    }
?>