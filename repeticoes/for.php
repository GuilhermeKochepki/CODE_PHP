<div class="titulo">Laço For</div>

<?php

for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
echo '<hr>';
$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

// for($i = 1; $i < 8; $i++)
//     echo "{$array[$i]} <br>";

for($i = 1; $i <= count($array); $i++)
    echo "{$array[$i]} <br>";
