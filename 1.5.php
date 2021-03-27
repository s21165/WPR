<?php
function rozdzielenie($napis = "Witam spacje"){
    $array = explode(" ", $napis);
    echo "%$array[1] $array[0]%\$#"; 
}
rozdzielenie();
?>