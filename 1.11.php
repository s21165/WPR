<?php
function Pangramem($a="The quick brown fox jumps over the lazy dog"){
    
    $zdanie = strtolower($a);
    $alfabet= str_split("abcdefghijklmnopqrstuvwxyz") ?? "";
    $panagram = true;
    echo "<br>";
   foreach($alfabet as $znak){
        if(strpos($zdanie, $znak) === false){
            $isPanagram = false;
        }
    }

    if($panagram){
      echo "true";
    } else {
        echo "false";
    }
}
Pangramem();
?>