<?php

$array = array(
    array("1", "2", "3", "A"),
    array("1", "2", "B", "C"),
    array("1", "D", "E", "F")
);

echo "Shape 1:\n" . "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "\n" . "<br>";
}

echo "Shape 2:\n" . "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 3; $j > 3 - $i; $j--) {
        echo $array[$i][$j] . " ";
    }
    echo "\n" . "<br>";
}

?>
