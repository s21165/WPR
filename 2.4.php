<!DOCTYPE html>
<html lang="en">
<head>
    <title>zad4</title>
</head>
<body> <fieldset>
<form action="2.4.php" method="post">
<h1>Enter the  number to check if it's prime: </h1>
   
        <input type="number" name="num">
        <input type="submit" value="check" name="show">
</form>


<?php
if (isset($_POST["show"])) {
    $num = (int)$_POST["num"];
    $sqrtNumber = (int)sqrt($num);
         jestPierwsza($num, $sqrtNumber);
}

function jestPierwsza($num, $sqrtNumber) {
    $ile = 0;
    if ($num>0){
        for ($i = 2; $i <= $sqrtNumber; $i++) {
            $ile++;
            if ($num % $i == 0)            {
            break;
            }
        }
        if( $sqrtNumber == $i-1 ) {
            echo " $num is a prime number.";
            echo "<br> Loops: $ile";
        } else {
            echo "$num isn't a prime number.";
            echo "<br> Loops: $ile";
        }
    }
}
    ?>
      </fieldset>
</body>
</html>