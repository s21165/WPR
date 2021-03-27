<?php
function trojkat($a=2, $b=3, $c=4){
     if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
         echo"Mozna zbudowac trojkat o bokach $a, $b, $c";    
     } else {
         echo "BŁĄD ";  
     } 
}
trojkat();
?>