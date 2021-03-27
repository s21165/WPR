<?php
function gwiazdki($a="3"){
    
for($i = 0; $i < $a; $i++){
    

    for($j = 0; $j < $i + 1; $j++){
        echo "*";
    }
    echo "<br>"; 
  }

  for($i = 0; $i < $a; $i++){

    for($j = $a - $i; $j > 0; $j--){
        echo "*";
    }
    echo "<br>";
  }
  for ($i = 0; $i < $a; $i++) {
    for($j = 0; $j < $a; $j++){
        if($j < $i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
  }
  for ($i = 0; $i < $a;) {
    $i++;
    for($j = $a; $j > 0; $j--){
        if($j > $i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
}
}
gwiazdki();
?>