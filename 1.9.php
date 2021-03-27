<?php
function skalarny($a="1 2 3", $b="4 5 6"){
    $arrayA = explode(" ", $a);
    $arrayB = explode(" ", $b);
    $wynik=0;
        
      
  if(count($arrayA) == count($arrayB)) {
      for ($i = 0; $i < sizeof($arrayA); $i++) {
        $wynik += (int)$arrayA[$i] * (int)$arrayB[$i];
    } 
    echo $wynik;
    
} else {
    echo "BŁĄD";
   
}
}
skalarny();
?>