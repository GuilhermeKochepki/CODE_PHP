<div class="titulo">Interpolação</div>

<?php 

$numero = 1;
echo $numero;
echo "<br> $numero";
echo '<br> $numero';

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$quantidade = 1;
$objeto = 'caneta';
//echo "<br>Eu tenho 5 $objetos";
if (($quantidade > 1) or ($quantidade == 0)){
    echo "<br>Eu tenho $quantidade {$objeto}s";
} else {
    echo "<br>Eu tenho $quantidade {$objeto}";
}


echo "<br>Eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s";