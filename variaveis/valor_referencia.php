<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
$variavelValor = $variavel;
echo "<br> $variavel $variavelValor";

$variavelValor = 'valor alterado';
echo "<br> $variavel $variavelValor";

$variavelReferencia = &$variavel;
echo "<br> $variavel $variavelReferencia";

$variavelReferencia = 'valor alterado';
echo "<br> $variavel $variavelReferencia";