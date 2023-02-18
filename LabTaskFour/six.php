<?php
//search an element from an array

$artists = array("jCole", "Kendrick", "MacMiller", "Drake", "Travis");
$search = "Kendrick";
$found = false;

for($i = 0; $i < count($artists); $i++) {
    if($artists[$i] == $search) {
        $found = true;
        break;
    }
}

if($found) {
    echo $search . " is found in the array.";
} else {
    echo $search . " is not found in the array.";
}

?>
