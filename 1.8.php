<?php
function ukladanie($a=1, $b=2, $c=3){
     if ($a>= $b & $b >= $c) {
         echo" $a, $b, $c". "<br>" . "$c, $b, $a";    
     } 
    elseif($a>= $c & $c >= $b) {
         echo" $a, $c, $b". "<br>" . "$b, $c, $a";;  
     } 
    elseif($b>= $a & $a >= $c) {
         echo" $b, $a, $c". "<br>" . "$c, $a, $b";;  
     } 
     elseif($b>= $c & $c >= $a) {
         echo" $b, $c, $a". "<br>" . "$a, $c, $b";;  
     } 
    elseif($c>= $a & $a >= $b) {
         echo" $c, $a, $b". "<br>" . "$b, $a, $c";;  
     } 
     elseif($c>= $b & $b >= $a) {
         echo" $c, $b, $a". "<br>" . "$a, $b, $c";;  
     } 
}
ukladanie();
?>