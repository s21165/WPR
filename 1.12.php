<?php
function Transpozycja ($a=6, $b=2){

 
    

    
    $tablica = array(array());

    
    foreach (range(1,$a) as $wiersz) {
        foreach (range(1,$b) as $kolumna){
            $tablica[$wiersz][$kolumna] = rand(10,100);
            
        }
    }
    
  foreach (range(1,$a) as $wiersz) {
      $koniec=0;      
        foreach (range(1,$b) as $kolumna){
            echo $tablica[$wiersz][$kolumna]. " ";
            $koniec++;             
            if ($koniec== $b) {
         echo"<br>";    
     } 
        }
  }
    echo"<br>"; 
    
    foreach (range(1,$b) as $kolumna) {
      $koniec=0;      
        foreach (range(1,$a) as $wiersz){
            echo $tablica[$wiersz][$kolumna]. " ";
            $koniec++;             
            if ($koniec== $a) {
         echo"<br>";    
     } 
        }
  }
    
    
    
}
Transpozycja ();
?>