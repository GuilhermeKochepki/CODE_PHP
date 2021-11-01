<div class="titulo">Array</div>

<?php

$lista = array(1, 2, 3.4, "texto");
echo '<br>';
var_dump($lista);
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
//echo '<br>' . $lista[4];

$texto = "Esse é um texto de caracteres";
echo '<br>' . $texto[1];
echo '<br>' . $texto[5];
echo '<br>' . mb_substr($texto, 5, 1); //considere isso pois ignora o tipo de encoding