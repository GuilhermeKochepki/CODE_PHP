<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump( 1 + 1.0 );
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';
echo floor(7 / 4), '<br>';
echo 7 % 4, '<br>';
echo 8 % 4, '<br>';
// echo intdiv(7, 0), '<br>'; //ERRO INF
//tudo que ocorre depois de um erro, não é renderiado
echo 4 ** 2, '<br>'; //4 elevado a 2

//PRECEDENCIA DE OPERADORES
// () -> ** -> / * % -> + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4;
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) **2, '<br>';