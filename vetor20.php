<?php

$vetor = array(10, 5, 8, 25, 13, 7, 20, 18, 14, 12, 3, 22, 11, 30, 9, 16, 2, 4, 6, 15);

$maior = $vetor[0];
$menor = $vetor[0];

foreach ($vetor as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
}

$numerospares = 0;

foreach ($vetor as $numero) {
    if ($numero % 2 == 0) {
        $numerospares++;
    }
}

$percentual = ($numerospares / count($vetor)) * 100;


$soma = 0;

foreach ($vetor as $numero) {
    $soma += $numero;
}

$media = $soma / count($vetor);

echo "O maior número no vetor é: $maior\n <br>";
echo "O menor número no vetor é: $menor\n <br>";
echo "O percentual de números pares é: $percentual%\n <br>";
echo "A média dos elementos do vetor é: $media\n <br>";

?>
