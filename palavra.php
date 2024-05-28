<?php

$p = "chocolate";

for ($i = 1; $i <= strlen($p); $i++) {
    
    echo strtoupper(str_repeat($p . " ", $i)) . "<br>";
}

?>

