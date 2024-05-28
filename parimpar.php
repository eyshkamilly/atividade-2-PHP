<?php

function parimpar($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}


$vetor = array(2, 7, 14, 23, 30, 41, 50, 61, 70, 81, 90, 101, 110, 121, 130);

foreach ($vetor as $numero) {
    echo "O número $numero é " . parimpar($numero) . ".\n";
}

?>
