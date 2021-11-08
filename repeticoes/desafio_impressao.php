<div class="titulo">Desafio Impressão</div>

<!-- imprimir apenas valores do array que contem indice par
for e foreach -->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

$cont = 0;
for(;;) {
    if($cont % 2 === 0) {
        echo "$array[$cont]";
        $cont++;
        continue;
    }
    $cont++;
    if($cont === 6) {
        break;
    }
}

echo "<hr>";
for($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    if($i === 6) break;
    echo $array[$i];
}

echo "<hr>";

foreach($array as $indice => $p) {
    if($indice == 6) break;
    if($indice %2 === 0) echo $p;
}