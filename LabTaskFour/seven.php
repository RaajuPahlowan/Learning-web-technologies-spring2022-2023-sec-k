<?php
//first shape
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n" . "<br>";    
}

//second shape
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\n" . "<br>";  
}

//third shape
$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$index = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $alphabet[$index++];
    }
    echo "\n" . "<br>";  
}
?>