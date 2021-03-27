<?php
function liczenie($a = 4, $b=2){
    $dodawanie = $a+$b;
    $odejmowanie = $a-$b;
    $mnozenie = $a*$b;
    $modulo = $a&$b;
    echo("dodawanie $a+$b= ".  $dodawanie . "<br>");
    echo("odejmowanie $a-$b= ".  $odejmowanie . "<br>");
    echo("mnozenie $a*$b= ".  $mnozenie . "<br>");
    echo("modulo $a&$b= ".  $modulo . "<br>");

    }
liczenie();
?>



